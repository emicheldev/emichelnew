<form wire:submit.prevent="store">
                               
    <div class="grid grid-cols-1 gap-6 mt-4">
        <div>
            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Title of post" wire:model='name'>
            @error('name') <div  class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div>
            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="slug of categorie" wire:model='slug'>
            @error('slug') <div  class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div>
            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="color 250,250,250" wire:model='color'>
            @error('color') <div  class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    <label class="block my-5">
        <textarea class="block w-full mt-1 border form-textarea" rows="3" placeholder="Enter icon" wire:model='icon'></textarea>
        @error('icon') <div  class="invalid-feedback">{{ $message }}</div> @enderror
    </label>
    
    <label class="block my-5">
        <textarea class="block w-full mt-1 border form-textarea" rows="3" placeholder="Enter description" wire:model='description'></textarea>
        @error('description') <div  class="invalid-feedback">{{ $message }}</div> @enderror
    </label>

    <div class="flex justify-end mt-4 text-xs ">
        <button type="submit" class="px-4 py-2 text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
    </div>
</form>