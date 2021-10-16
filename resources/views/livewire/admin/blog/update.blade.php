<div>
    <h3 class="text-gray-700 text-3xl font-semibold">Ajout d'article </h3>
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
                 

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 my-4">
                        <label class="block">
                            <select class="form-select block w-full mt-1" wire:model="category_id">
                                <option value='' disable>--Selection de catégories--</option>
                                @forelse ($categories as $id => $label)
                                    <option value="{{$id}}" {{ $id == $category_id ? 'selected' : '' }} >{{$label}} </option>
                                @empty
                                pas de categorie
                                @endforelse
                             
                            </select>
                        </label>
                    </div>
                    <div class="block">
                        @forelse($availableTags as $id =>$name)
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" wire:model="tags_id" name="tags[] " value="{{$id}}" 
                            >
                            <span class="ml-2">{{$name}} </span>
                        </label>
                        @empty
                        pas de tags
                        @endforelse
                    </div>
                                         
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" placeholder="Title of post" wire:model='title'>
                            @error('title') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" placeholder="url of post" wire:model='image'>
                            @error('image') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <label class="block my-5">
                        <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter description of post." wire:model='description'></textarea>
                        @error('description') <div  class="invalid-feedback">{{ $message }}</div> @enderror

                    </label>
                    <label class="block">
                        <textarea id="mytextarea" class="form-textarea mt-1 block w-full" rows="5" placeholder="Enter content." wire:model='content'></textarea>
                        @error('content') <div  class="invalid-feedback">{{ $message }}</div> @enderror

                    </label>

                    <div class="flex justify-end mt-4 text-xs ">
                        <button type="submit" wire:click="$set('online','0')" value="0"  class="px-4 py-2 text-gray-700 rounded border focus:outline-none focus:bg-gray-700 mr-2">Enregistrer</button>
                        <button type="submit" wire:click="$set('online','1')" value="1" class="px-4 py-2 bg-blue-800 text-gray-100 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Publier</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
    @push('scripts')
    
    @endpush
</div>