<nav class="fixed z-40 top-0 right-0 left-0 bg-white  dark:bg-gray-900 py-5">
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
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                     focus:ring-blue-500 focus:border-blue-500 block w-full  p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-outfit"
                    placeholder="Senar, lure, timah dll.." />
            </div>
        </form>

        <div class="flex items-center justify-center gap-5" id="feature">



            {{-- cart --}}
            <div class="flex items-center justify-center" id="cart">
                <a href="{{ route('cart') }}">
                    <img src="{{ asset('/assets/icon/cart.svg') }}" alt="">
                </a>
            </div>

            {{-- barrier --}}
            <div class="flex items-center justify-center font-thin" id="barrier">
                <span class="text-xl font-weight-light m-0 p-0">|</span>
            </div>


            {{-- maps --}}
            <div class="flex items-center justify-center" id="maps">
                <a href="#" id="maps"
                    class="border flex items-center justify-center text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2  text-center gap-2 dark:focus:ring-[#3b5998]/55">
                    <img src="{{ asset('/assets/icon/pin.svg') }}" alt="">
                    <span class="location">
                        Lihat Lokasi
                    </span>
                </a>
            </div>



            @GuestCustom
            {{-- signin --}}
            <div class="flex items-center justify-center" id="signin">
                <a href="{{ route('signin') }}"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                    type="button">
                    Masuk
                </a>
            </div>

            {{-- signup --}}
            <div class="flex items-center justify-center" id="signup">
                <a href="{{ route('signup') }}"
                    class=" border bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white">
                    Daftar
                </a>
            </div>
            @endGuestCustom


            {{-- after login --}}
            @AuthCustom
            {{-- notification --}}
            <div class="bg-white border-gray-200 dark:bg-gray-900" id="notification">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                        <button type="button"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white  rounded-lg  border border-[#3b5998"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="notification-dropdown"
                            data-dropdown-placement="bottom">
                            {{-- logo --}}
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m9.046 3.59-.435-2.324m.435 2.324a5.338 5.338 0 0 1 6.033 4.333l.331 1.77c.439 2.344 2.383 2.587 2.599 3.76.11.586.22 1.171-.309 1.271L5 17.101c-.529.1-.639-.488-.749-1.074-.219-1.172 1.506-2.102 1.067-4.447l-.331-1.769a5.338 5.338 0 0 1 4.059-6.22Zm-7.13 4.602a8.472 8.472 0 0 1 2.17-5.048m2.646 13.633A3.472 3.472 0 0 0 13.46 16l.089-.5-6.817 1.277Z" />
                            </svg>

                            {{-- end logo --}}

                            <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-sm font-semibold text-blue-800 bg-blue-200 
                                rounded-full">
                                10
                            </span>
                        </button>

                        {{-- Dropdown menu --}}
                        <div class="z-50 hidden drop-shadow-2xl border  my-4 w-96 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="notification-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-lg font-bold text-green-600 dark:text-white">
                                    Transaksi selesai!!
                                </span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                                    Barang akan segera di proses oleh admin
                                </span>
                            </div>
                            <div class="px-4 py-3">
                                <span class="block text-lg font-bold text-red-600 dark:text-white">
                                    Barang Habis
                                </span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                                    Barang yang anda simpan dikeranjang sudah habis
                                    zz </span>
                            </div>
                            <div class="px-4 py-3">
                                <span class="block text-lg font-bold text-yellow-500 dark:text-white">
                                    Lengkapi Alamat
                                </span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                                    Lengkapi alamat anda agar barang bisa segera dikirim
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- end notification --}}


            {{-- user --}}
            <div class="bg-white border-gray-200 dark:bg-gray-900" id="user">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">

                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <button type="button"
                            class="flex text-sm border rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{ asset('/assets/logo/blue.png') }}"
                                alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                                <span
                                    class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">

                                <li>
                                    <a href="/settings"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">settings</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end user --}}

            @endAuthCustom

        </div>
    </div>

    <div id="phone">
        @include('components.headers.phone-menu')
    </div>
</nav>