<div>
    
    <h3 class="text-3xl font-semibold text-gray-700">Ajouter une categorie </h3>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    <div class="mt-8">
        <div class="grid grid-cols-1 gap-5 mt-4 sm:grid-cols-2">

            {{-- Formulaire --}}

            <div class="p-6 bg-white rounded-md shadow-md">
                @if ($updateMode)
                    @include('livewire.admin.category.form_edit')
                @else
                    @include('livewire.admin.category.form_store')
                @endif
                
            </div>
            
            {{-- tableau --}}
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nom</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Description</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">online</th>
                            </tr>
                        </thead>
    
                        <tbody class="bg-white">
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                           
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 text-gray-500">{{ $category->name}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{!! Str::limit($category->description, 30) !!}</div>
                                    </td>
        
                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <button wire:click="edit({{$category->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button wire:click="destroy({{$category->id}})" class="text-indigo-600 hover:text-indigo-900">Delete</button>
    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    </div>

   
</div>