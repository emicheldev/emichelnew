<div>

    <h3 class="text-3xl font-semibold text-gray-700">Ajouter un Cours  </h3>

    
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                
                <form wire:submit.prevent="savecourse">
                 

                    <div class="grid items-center grid-cols-2 gap-6 my-4 sm:grid-cols-3">
                        <label class="block">
                            <select class="block w-full mt-1 border form-select" wire:model="category_id">
                                <option value='' disable>--Selection de catégories--</option>
                                @forelse ($categories as $id => $label)
                                    <option value="{{$id}} " >{{$label}} </option>
                                @empty
                                pas de categorie
                                @endforelse
                             
                            </select>
                        </label>

                        <div>
                            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Id of Video " wire:model='youtube_id'>
                            @error('youtube_id') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        
                        <div class="flex ">
                            <span class="text-gray-700">Niveau</span>
                            <div class="flex ml-2">
                              <div>
                                <label class="inline-flex items-center ml-2">
                                  <input type="radio" class="border form-radio" wire:model="level" value="0" checked>
                                  <span class="">Débutant</span>
                                </label>
                              </div>
                              <div>
                                <label class="inline-flex items-center ml-2">
                                  <input type="radio" class="border form-radio" wire:model="level" value="1">
                                  <span class="">Moyen</span>
                                </label>
                              </div>
                              <div>
                                <label class="inline-flex items-center ml-2">
                                  <input type="radio" class="border form-radio" wire:model="level" value="3">
                                  <span class="">Avancé</span>
                                </label>
                              </div>
                            </div>
                        </div>
                    </div>
                   
                                         
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Title of course" wire:model='title'>
                            @error('title') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="url of course image" wire:model='image'>
                            @error('image') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <label class="block my-5">
                        <textarea class="block w-full mt-1 border form-textarea" rows="3" placeholder="Enter introduction of course." wire:model='introduction'></textarea>
                        @error('introduction') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                    </label>

                    <label class="block my-5">
                        <textarea class="block w-full mt-1 border form-textarea" rows="3" placeholder="Enter description of course." wire:model='description'></textarea>
                        @error('description') <div  class="invalid-feedback">{{ $message }}</div> @enderror
                    </label>

                    <label class="block">
                        <textarea id="prerequisites" class="block w-full mt-1 text-gray-900 border form-textarea" rows="5" placeholder="Enter prerequisites." wire:model='prerequisites'></textarea>
                        @error('prerequisites') <div  class="invalid-feedback">{{ $message }}</div> @enderror

                    </label>

                    <div class="flex justify-end mt-4 text-xs ">
                        <button type="submit" wire:click="$set('online','0')" value="0"  class="px-4 py-2 mr-2 text-gray-700 border rounded focus:outline-none focus:bg-gray-700">Brouillon</button>
                        <button type="submit" wire:click="$set('online','1')" value="1" class="px-4 py-2 text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Publier</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
  
        
</div>