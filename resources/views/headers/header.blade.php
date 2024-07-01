<nav class="fixed z-50 top-0 right-0 left-0 bg-white  dark:bg-gray-900 py-5">
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
                <a href="{{ route('cart') }}">
                    <img src="{{ asset('/assets/icon/cart.svg') }}" alt="">
                </a>
            </div>

            <div class="flex items-center justify-center font-thin">
                <span class="text-xl font-weight-light m-0 p-0">|</span>
            </div>

            {{-- maps --}}
            <div class="flex items-center justify-center">
                <a href="#" id="maps"
                    class="border flex items-center justify-center text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2  text-center gap-2 dark:focus:ring-[#3b5998]/55">
                    <img src="{{ asset('/assets/icon/pin.svg') }}" alt="">
                    <span class="location">
                        Lihat Lokasi
                    </span>
                </a>
            </div>

            {{-- signin --}}
            {{-- <div class="flex items-center justify-center">
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                    type="button">
                    Masuk
                </button>
            </div> --}}

            {{-- signup --}}
            {{-- <div class="flex items-center justify-center">
                <a href="{{ route('signup') }}"
                    class=" border bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white">
                    Daftar
                </a>
            </div> --}}


            {{-- after login --}}

            <div class="bg-white border-gray-200 dark:bg-gray-900 border">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

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
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div id="phone">
        @include('headers.phone-menu')
    </div>
</nav>