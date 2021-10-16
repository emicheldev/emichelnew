<div>

    <h3 class="text-3xl font-semibold text-gray-700">Ajouter une categorie </h3>


    <div class="mt-8">
        <div class="grid grid-cols-1 gap-5 mt-4 sm:grid-cols-2" x-data="{ addRole:false , AddPermission: false }" >

            {{-- Role array --}}
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <div class="flex justify-between m-6">
                        <div class="">Liste de Rôles</div>
                        <div class="">
                            <button type="submit"
                                class="px-4 py-2 text-sm text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"
                                @click="addRole = !addRole"
                                x-text=" addRole ? 'Fermer' : 'Ajouter' "
                                >

                            </button>
                        </div>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nom</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @if ($updateMode)
                            <tr >
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200" colspan="3">
                                    <div class="items-center " >
                                    @include('includes.update-role',['role' => true])
                                    </td>
                            </tr>
                            @endif

                            <tr x-show="addRole" x-transition.duration-500ms >
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200" colspan="3">
                                    <div class="items-center " >
                                        <form class="flex w-full" wire:submit.prevent='store'>
                                            <input type="text" wire:model='name' class="w-full px-6 py-3 mr-3 text-sm border" placeholder="Nom du rôle">
                                            <input type="text" wire:model='description' class="w-full px-6 py-3 mr-3 text-sm border" placeholder="Description du rôle">
                                            <button type="submit" class="px-4 py-2 text-sm text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
                                        </form>
                                        @error('name') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                                        @error('description') <div  class="invalid-feedback">{{ $message }}</div> @enderror

                                    </div>
                                </td>

                            </tr>


                            @foreach ($roles as $role)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="">
                                                <div class="text-sm leading-5 text-gray-500 capitalize">{{ $role->name}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="">
                                                <div class="text-sm leading-5 text-gray-500 capitalize">{{ $role->description }}</div>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <button wire:click="edit({{$role->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button wire:click="destroy({{$role->id}})" class="text-indigo-600 hover:text-indigo-900">Delete</button>

                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Permission array --}}
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <div class="flex justify-between m-6">
                        <div class="">Liste de Permitions</div>
                        <div class="">
                            <button type="submit"
                                class="px-4 py-2 text-sm text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"
                                @click="AddPermission = !AddPermission"
                                x-text=" AddPermission ? 'Fermer' : 'Ajouter' "
                                >

                            </button>
                        </div>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nom</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @if ($updateModePermission)
                            <tr >
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200" colspan="3">
                                    <div class="items-center " >
                                    @include('includes.update-role', ['role'=> false ])
                                    </td>
                            </tr>
                            @endif

                            <tr x-show="AddPermission" x-transition.duration-500ms >
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200" colspan="3">
                                    <div class="items-center " >
                                        <form class="flex w-full" wire:submit.prevent='storePermission'>
                                            <input type="text" wire:model='name' class="w-full px-6 py-3 mr-3 text-sm border" placeholder="Nom du rôle">
                                            <button type="submit" class="px-4 py-2 text-sm text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
                                        </form>
                                        @error('name') <div  class="invalid-feedback">{{ $message }}</div> @enderror

                                    </div>
                                </td>

                            </tr>

                            @forelse ( $permissions as $permission )
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="">
                                                <div class="text-sm leading-5 text-gray-500 capitalize">{{ $permission->name}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="">
                                                <div class="text-sm leading-5 text-gray-500 capitalize">{{ $permission->description }}</div>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <button wire:click="edit_permission({{$permission->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button wire:click="destroy_permission({{$permission->id}})" class="text-indigo-600 hover:text-indigo-900">Delete</button>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    Il n a pas de permission
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
