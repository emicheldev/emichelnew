<form wire:submit.prevent="
        @if ($role==true)
            store()
        @elseif ($role == false)
            storePermission()
        @else

        @endif
     " >

    <div class="grid grid-cols-1 gap-6 mt-4">
        <input type="hidden" wire:model='selected_id'>
        <div>
            <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Title of post" wire:model='name'>
            @error('name') <div  class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        @if ($role)
            <div>
                <input class="w-full mt-2 border rounded-md form-input focus:border-indigo-600" type="text" placeholder="Title of post" wire:model='description'>
                @error('description') <div  class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

        @endif
        <button type="submit" class="px-4 py-2 text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
    </div>


</form>
