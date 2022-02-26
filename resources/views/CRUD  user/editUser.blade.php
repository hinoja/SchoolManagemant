
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                
                  <img src="{{ asset('img/etudaint3.jpg') }}"  width="400px" height="300px" alt="">
            </a>
        </x-slot>
   
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{  route('User.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name') ?? $user->name " required autofocus />

            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value=" $user->email" required />
            </div>

             <!-- ROLE -->
            <div class="mt-4 ">
                      
                            <x-label for="admin" :value="__('Rôle')" />
                            <select name="admin" id="admin" class="block mt-1 w-full">
                                <option value="0">Utilisateur</option>
                               
                            </select>
                  
            </div>
 
 
         
            
              <!-- Upload Image -->
              <div class="mt-4">
                
                        
                            <x-label for="avatar" :value="__('Image')" />
                            <input type="file" name="image" class="block mt-1 w-full"  id="avatar" accept="image/png image/jpg image/jpeg image/ico" >
                            
                 
            </div>
            

            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-4">
                    {{ __('Update') }}
 
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
