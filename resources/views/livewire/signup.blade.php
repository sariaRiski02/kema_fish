<div class="pt-40">
    <form class="max-w-md mx-auto" wire:submit.prevent='register'>
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="name" wire:model.live='form.name' id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
                    @error('form.name') 
                    block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer
                    @enderror
                    " placeholder=" " required />
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 is-invalid rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                    
                    @error('form.name')
                    absolute text-sm text-red-600 dark:text-red-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto
                    @enderror

                    ">
                    Nama
                </label>
                @error('form.name') <span class="text-red-700 font-outfit text-sm font-medium ">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" wire:model.live='form.email' id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
                @error('form.email') 
                    block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer
                    @enderror
                " placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                @error('form.email')
                    absolute text-sm text-red-600 dark:text-red-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto
                    @enderror
                ">
                Alamat Email
            </label>
            @error('form.email') <span class="text-red-700 font-outfit text-sm font-medium ">{{ $message }}</span>
            @enderror
        </div>
        {{-- password --}}
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" wire:model.defer='form.password' id="floating_password" 
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
                dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
                @error('form.password') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 @enderror" 
                placeholder=" " required />
        
            <label for="floating_password" 
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                @error('form.password') text-red-600 dark:text-red-700 @enderror">Password</label>
            <span class="absolute right-0 top-0 mt-3 mr-3 cursor-pointer" onclick="togglePassword('floating_password')">
                👁️
            </span>
            @error('form.password') 
                <span class="text-red-700 font-outfit text-sm font-medium ">{{ $message }}</span> 
            @enderror
        </div>
        
        {{-- password confirmation --}}
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password_confirmation" wire:model.defer='form.password_confirmation'
                id="floating_repeat_password" 
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
                dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
                @error('form.password_confirmation') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 @enderror" 
                placeholder=" " required />
        
            <label for="floating_repeat_password" 
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                @error('form.password_confirmation') text-red-600 dark:text-red-700 @enderror">Konfirmasi password</label>
            <span class="absolute right-0 top-0 mt-3 mr-3 cursor-pointer" onclick="togglePassword('floating_repeat_password')">
                👁️
            </span>
            @error('form.password_confirmation') 
                <span class="text-red-700 font-outfit text-sm font-medium ">{{ $message }}</span> 
            @enderror
        </div>
        


        <div class="relative z-0 w-full mb-5 group">
            <div class="relative z-0 w-full mb-5 group">
                <input type="tel" pattern="^\+?[0-9]{1,4}[-\s]?[0-9]{6,14}$" name="phone" id="floating_phone"
                    wire:model.live='form.phone' class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
                    @error('form.phone') 
                    block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer
                    @enderror
                    " placeholder=" " required />
                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                    @error('form.phone')
                    absolute text-sm text-red-600 dark:text-red-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto
                    @enderror">No
                    Tlp contoh:(08xxxxxxxx)</label>
                @error('form.phone') <span class="text-red-700 font-outfit text-sm font-medium ">{{ $message }}</span>
                @enderror


            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        <div class="mt-4">
            <a href="{{ route('auth.google.redirect') }}"
                class="flex items-center justify-center text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-gray-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:bg-gray-700">
                <img src="{{ asset('/assets/icon/google.svg') }}" alt="google" class="w-5 h-5 mr-2" />
                Masuk Dengan Google
            </a>
        </div>
    </form>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>

</div>