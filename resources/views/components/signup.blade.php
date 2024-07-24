<form class="max-w-md mx-auto" method="POST" action="/signup">
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="name" id="floating_name" value="{{ old('name') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
            @if ($errors->has('name'))
            border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 
            focus:outline-none focus:ring-0 focus:border-red-600 
            @else
            border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
            focus:outline-none focus:ring-0 focus:border-blue-600 peer
            @endif
            " placeholder=" " required />
        <label for="floating_name" class="peer-focus:font-medium absolute text-sm 
            @if ($errors->has('name'))
                text-red-600 dark:text-red-400
            @else
                text-gray-500 dark:text-gray-400 
            @endif
            duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
            
            ">
            Nama</label>
        @error('name')

        <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                class="font-medium">Opss..!</span> {{ $message }}.</p>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="email" id="floating_email" value="{{ old('email') }}" class="
             @if ($errors->has('email'))
            border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 
            focus:outline-none focus:ring-0 focus:border-red-600 
            @else
            border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
            focus:outline-none focus:ring-0 focus:border-blue-600 peer
            @endif
            block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2  peer" placeholder=" "
            required />
        <label for="floating_email"
            class="
             @if ($errors->has('email'))
                text-red-600 dark:text-red-400
            @else
                text-gray-500 dark:text-gray-400 
            @endif
            peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Alamat Email
        </label>
        @error('email')

        <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                class="font-medium">Opss..!</span> {{ $message }}.</p>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="password" id="password" class="
        @if ($errors->has('password'))
            border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 
            focus:outline-none focus:ring-0 focus:border-red-600 
            @else
            border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
            focus:outline-none focus:ring-0 focus:border-blue-600 peer
            @endif
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 peer" placeholder=" "
            required />
        <label for="password"
            class="
            @if ($errors->has('password'))
                text-red-600 dark:text-red-400
            @else
                text-gray-500 dark:text-gray-400 
            @endif
            peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Password
        </label>
        @error('password')

        <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                class="font-medium">Opss..!</span> {{ $message }}.</p>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="password_confirmation" id="confirm_password" class="
        @if ($errors->has('password'))
            border-red-600 appearance-none dark:text-white dark:border-red-500 dark:focus:border-red-500 
            focus:outline-none focus:ring-0 focus:border-red-600 
            @else
            border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
            focus:outline-none focus:ring-0 focus:border-blue-600 peer
            @endif
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white 
        dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
            focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="confirm_password"
            class="
             @if ($errors->has('password'))
                text-red-600 dark:text-red-400
            @else
                text-gray-500 dark:text-gray-400 
            @endif
            peer-focus:font-medium absolute text-sm  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Konfirmasi password
        </label>
        @error('password')

        <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                class="font-medium">Opss..!</span> {{ $message }}.</p>
        @enderror

    </div>


    <div class=" pb-5 flex items-center">
        <input id="link-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 
            dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            Lihat Password

        </label>
    </div>


    <div class="w-full border">

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Daftar
        </button>
    </div>

    <div class="flex justify-center items-center ">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <span class="absolute px-3 -translate-x-1/2 bg-white left-1/2 dark:text-white text-sm">atau
                masuk dengan</span>
        </div>

    </div>
    <div class="flex justify-center items-center w-full  gap-1">
        <a href="/auth/google/redirect" class="w-full">
            <div class="w-full border rounded-md flex gap-2 py-1 justify-center items-center">
                <img src="{{ asset('/assets/icon/google.svg') }}" alt="google" class="w-4 h-4" />
                <span class="text-sm font-outfit font-medium text-gray-900 dark:text-white">
                    Google</span>
            </div>
        </a>
    </div>
    </div>
</form>
<script>
    const checkbox = document.getElementById('link-checkbox');
    const password = document.getElementById('password');
    const confirm_password = document.getElementById('confirm_password');
    checkbox.addEventListener('change', function () {
        if (password.type === 'password') {
            password.type = 'text';
            confirm_password.type = 'text';
        } else {
            password.type = 'password';
            confirm_password.type = 'password';
        }
    });
</script>