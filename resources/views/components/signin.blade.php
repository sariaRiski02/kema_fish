<div class="flex justify-center items-center w-full z-0">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 drop-shadow-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Login
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email</label>
                        <input type="email" name="email" id="email" class="
                            @if ($errors->has('email'))
                            border-red-600 appearance-none dark:text-white dark:border-red-500 
                            dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600        
                            @else
                            bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                            @endif" placeholder="john@example.com" required />

                        @error('password')
                        <p id="standard_error_help" class="pt-1 pl-2 text-xs text-red-600 dark:text-red-400">
                            <span class="font-medium">
                                Opss..!
                            </span>
                        </p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="@if ($errors->has('password'))
                            border-red-600 appearance-none dark:text-white dark:border-red-500 
                            dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 
                                
                            @else
                            bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                            @endif" required />
                        @error('password')
                        <p id="standard_error_help" class="pt-1 pl-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Opss..!</span> ditemukan.
                        </p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk
                    </button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Belum Daftar? <a href="/signup" class="text-blue-700 hover:underline dark:text-blue-500">Buat
                            akun</a>
                    </div>
                </form>
                <div class="flex justify-center items-center ">
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                        <span class="absolute px-3 -translate-x-1/2 bg-white left-1/2 dark:text-white text-sm">atau
                            masuk dengan</span>
                    </div>

                </div>
                <div class="flex justify-center items-center w-full  gap-1">
                    <a href="#" class="w-full">
                        <div class="w-full border rounded-md flex gap-2 py-1 justify-center items-center">
                            <img src="{{ asset('/assets/icon/google.svg') }}" alt="google" class="w-4 h-4" />
                            <span class="text-sm font-outfit font-medium text-gray-900 dark:text-white">
                                Google</span>
                        </div>
                    </a>
                    <a href="#" class="w-full">
                        <div class="w-full border rounded-md flex gap-2 py-1 justify-center items-center">
                            <img src="{{ asset('/assets/icon/facebook.svg') }}" alt="google" class="w-4 h-4" />
                            <span class="text-sm font-outfit font-medium text-gray-900 dark:text-white">
                                Facebook</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>