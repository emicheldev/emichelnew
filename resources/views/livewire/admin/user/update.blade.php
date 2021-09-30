<div>
    <h3 class="text-3xl font-semibold text-gray-700">Profil </h3>
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
                
                <form wire:submit.prevent="update" enctype="multipart/form-data">
                                         
                    <div class="flex flex-col gap-6 mt-4">
                       
                        <div class="flex items-center gap-x-5">
                            <div class="">
                                @if ($avatar)
                                    <img class="object-cover object-center w-20 h-20 rounded-full" src="{{$avatar}} " alt="Avatar Upload" />
                                @else
                                    <img class="object-cover object-center w-20 h-20 rounded-full" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" />
                                @endif
                            </div>
                            <label class="mt-6 cursor-pointer">
                                <span class="px-4 py-2 text-gray-100 bg-purple-700 rounded-md hover:bg-purple-800 focus:outline-none focus:bg-purple-700">Changer d'avatar</span>
                                <input class="hidden" type="file" wire:model='avatar'>
                                @error('avatar') <div  class="invalid-feedback">{{ $avatar }}</div> @enderror
                            </label>
                           
                        </div>

                        <div class="flex gap-x-5 ">
                            <div class="flex-1 w-1/2">
                                <span class="text-sm">Nom</span>
                                <input class="w-full capitalize bg-gray-100 rounded-md form-input focus:border-indigo-600" type="text" placeholder="name of post" wire:model='name'>
                                @error('name') <div  class="invalid-feedback">{{ $name }}</div> @enderror    
                            </div>
                            
                            <div class="flex-1 w-1/2">
                                <span class="text-sm">Email</span>
                                <input class="w-full bg-gray-100 rounded-md form-input focus:border-indigo-600" type="email" placeholder="name of post" wire:model='email'>
                                @error('email') <div  class="invalid-feedback">{{ $email }}</div> @enderror    
                            </div>
                        </div>
                        <div class="flex gap-x-5 ">
                            <div class="flex-1 w-1/2">
                                <span class="text-sm">Nouveau mot de passe</span>
                                <input class="w-full capitalize bg-gray-100 rounded-md form-input focus:border-indigo-600" type="text" placeholder="name of post" wire:model='name'>
                                @error('name') <div  class="invalid-feedback">{{ $name }}</div> @enderror    
                            </div>
                            
                            <div class="flex-1 w-1/2">
                                <span class="text-sm">Confirmer mot de passe</span>
                                <input class="w-full bg-gray-100 rounded-md form-input focus:border-indigo-600" type="email" placeholder="name of post" wire:model='email'>
                                @error('email') <div  class="invalid-feedback">{{ $email }}</div> @enderror    
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="font-semibold uppercase">Présence en ligne</h3>
                            <div class="flex gap-x-5 ">
                                <div class="flex-1 w-1/2">
                                    <span class="text-sm">Votre site web</span>
                                    <input class="w-full capitalize bg-gray-100 rounded-md form-input focus:border-indigo-600" type="text" placeholder="name of post" wire:model='name'>
                                    @error('name') <div  class="invalid-feedback">{{ $name }}</div> @enderror    
                                </div>
                                
                                <div class="flex-1 w-1/2">
                                    <span class="text-sm">Confirmer mot de passe</span>
                                    <input class="w-full bg-gray-100 rounded-md form-input focus:border-indigo-600" type="email" placeholder="name of post" wire:model='email'>
                                    @error('email') <div  class="invalid-feedback">{{ $email }}</div> @enderror    
                                </div>

                                <div class="flex-1 w-1/2">
                                    <span class="text-sm">Nouveau mot de passe</span>
                                    <input class="w-full capitalize bg-gray-100 rounded-md form-input focus:border-indigo-600" type="text" placeholder="name of post" wire:model='name'>
                                    @error('name') <div  class="invalid-feedback">{{ $name }}</div> @enderror    
                                </div>
                                
                                <div class="flex-1 w-1/2">
                                    <span class="text-sm">Confirmer mot de passe</span>
                                    <input class="w-full bg-gray-100 rounded-md form-input focus:border-indigo-600" type="email" placeholder="name of post" wire:model='email'>
                                    @error('email') <div  class="invalid-feedback">{{ $email }}</div> @enderror    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-end mt-4 text-xs ">
                        <button type="submit" class="px-4 py-2 text-gray-100 bg-blue-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Publier</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
    @push('scripts')
    
    @endpush
</div>