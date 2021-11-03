<div>
    <h3 class="text-3xl font-semibold text-gray-700">Modifier </h3>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">

                <form wire:submit.prevent="update">


                    <div class="grid grid-cols-1 gap-6 my-4 sm:grid-cols-2">
                        <label class="block">
                            <select class="block w-full mt-1 border form-select" wire:model="course_id">
                                <option value='' disable>--Selection de Cours--</option>
                                @forelse ($courses as $id => $label)
                                    <option value="{{$id}}" {{ $id == $course_id ? 'selected' : '' }} >{{$label}} </option>
                                @empty
                                pas de categorie
                                @endforelse

                            </select>
                        </label>
                    </div>


                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Title of post" wire:model='title'>
                            @error('title') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="url of post" wire:model='image'>
                            @error('image') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <label class="block my-5">
                        <textarea class="block w-full mt-1 border form-textarea" rows="3" placeholder="Enter ressource of post." wire:model='ressource'></textarea>
                        @error('ressource') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                    </label>

                    <label class="block">
                        <textarea class="block w-full mt-1 border form-textarea" rows="10" placeholder="Enter content." wire:model='content'></textarea>
                        @error('content') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                    </label>

                    <div class="flex justify-end mt-4 text-xs ">
                        <button type="submit" wire:click="$set('online','0')" value="0"  class="px-4 py-2 mr-2 text-gray-700 border rounded focus:outline-none focus:bg-gray-700">Enregistrer</button>
                        <button type="submit" wire:click="$set('online','1')" value="1" class="px-4 py-2 text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Publier</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

</div>
