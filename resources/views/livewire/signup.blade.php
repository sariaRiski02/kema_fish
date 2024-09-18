<div>


    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div>
                <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Buat Akun dulu dong..!
                    </h2>
                    <form class="mt-8 space-y-6" wire:submit.prevent='register'>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="name" wire:model='form.name' id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your full name" required />
                            @error('form.name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            
                            @enderror
                            
                            
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" wire:model='form.email' name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required />
                            @error('form.email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            
                        </div>

                        <div class="flex gap-2">
                            <!-- Password Field -->
                            <div class="w-full relative">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" wire:model='form.password' name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="button" class="absolute right-3 top-9 text-gray-600 dark:text-gray-400" onclick="togglePassword('password', 'password-icon')">
                                    <svg id="password-icon" class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10a9.953 9.953 0 0 1 2.112-3.158L.645 5.017a1 1 0 1 1 1.414-1.414l1.928 1.925a9.964 9.964 0 0 1 12.026 0l1.928-1.925a1 1 0 1 1 1.414 1.414l-1.925 1.928A9.953 9.953 0 0 1 19.542 10a9.953 9.953 0 0 1-2.112 3.158l1.925 1.928a1 1 0 1 1-1.414 1.414l-1.928-1.925a9.964 9.964 0 0 1-12.026 0l-1.928 1.925a1 1 0 1 1-1.414-1.414l1.925-1.928A9.953 9.953 0 0 1 .458 10z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                @error('form.password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <!-- Confirm Password Field -->
                            <div class="w-full relative">
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                                <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="button" class="absolute right-3 top-9 text-gray-600 dark:text-gray-400" onclick="togglePassword('confirm-password', 'confirm-password-icon')">
                                    <svg id="confirm-password-icon" class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10a9.953 9.953 0 0 1 2.112-3.158L.645 5.017a1 1 0 1 1 1.414-1.414l1.928 1.925a9.964 9.964 0 0 1 12.026 0l1.928-1.925a1 1 0 1 1 1.414 1.414l-1.925 1.928A9.953 9.953 0 0 1 19.542 10a9.953 9.953 0 0 1-2.112 3.158l1.925 1.928a1 1 0 1 1-1.414 1.414l-1.928-1.925a9.964 9.964 0 0 1-12.026 0l-1.928 1.925a1 1 0 1 1-1.414-1.414l1.925-1.928A9.953 9.953 0 0 1 .458 10z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                @error('form.password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        
                        <div>
                            <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Hp:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                    </svg>
                                </div>
                                <input type="text" id="phone-input" wire:model='phone' aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="08zzzzzz" required/>
                            </div>
                            @error('form.phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        
                        <div>

                            <button type="submit" class="w-full px-5 py-2 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Buat akun
                            </button>
                            <div class="text-sm font-medium pt-2 text-gray-900 dark:text-white">
                                sudah punya akun? 
                                <a href="{{ route('signin') }}" class="text-blue-600 hover:underline dark:text-blue-500">
                                    Masuk
                                </a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('auth.google.redirect') }}"
                                class="flex items-center justify-center text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-gray-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:bg-gray-700">
                                <img src="{{ asset('/assets/icon/google.svg') }}" alt="google" class="w-5 h-5 mr-2" />
                                Masuk Dengan Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Kema Fish</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Daftar dulu trus belanja trus mancing widiiihhh.... pasti seru tuh..!</p>
                <a href="{{ route('signin') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Klo udah punya akun, langsung masuk aja
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
            
        </div>
    </section>
    
    <script>
        function togglePassword(fieldId, iconId) {
            var passwordField = document.getElementById(fieldId);
            var icon = document.getElementById(iconId);
        
            // Toggle password visibility
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        
            // Toggle icon (optional: you can change the icon here to show "eye" or "eye-slash")
        }
        </script>

</div>