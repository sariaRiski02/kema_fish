<nav class="fixed top-0 right-0 left-0 bg-white  dark:bg-gray-900 py-5">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4 gap-2">

        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo/blue.png') }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-3xl whitespace-nowrap
             dark:text-white font-outfit font-bold color-kema-fish" id="logo">
                KemaFish
            </span>
        </a>

        <form class="flex items-center flex-grow-3 mx-auto  ">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">

                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-outfit"
                    placeholder="Senar, lure, timah dll.." />
            </div>
        </form>

        <div class="flex items-center justify-center gap-5" id="feature">

            {{-- cart --}}
            <div class="flex items-center justify-center" id="cart">
                <a href="#">
                    <img src="{{ asset('/assets/icon/cart.svg') }}" alt="">
                </a>
            </div>

            <div class="flex items-center justify-center font-thin">
                <span class="text-xl font-weight-light m-0 p-0">|</span>
            </div>

            {{-- maps --}}
            <div class="flex items-center justify-center">
                <a href="#" id="maps"
                    class="flex items-center justify-center text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2  text-center gap-2 dark:focus:ring-[#3b5998]/55">
                    <img src="{{ asset('/assets/icon/pin.svg') }}" alt="">
                    <span class="location">
                        Lihat Lokasi
                    </span>
                </a>
            </div>

            {{-- signin --}}
            <div class="flex items-center justify-center">
                <a href="#"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                    Masuk
                </a>
            </div>

            {{-- signup --}}
            <div class="flex items-center justify-center">
                <a href="#"
                    class=" border bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white">
                    Daftar
                </a>
            </div>

        </div>

    </div>

    <div id="phone">
        @include('headers.phone-menu')
    </div>
</nav>