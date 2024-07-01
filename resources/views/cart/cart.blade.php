@extends('app.index')

@section('header')
@include('headers.header')
@endsection


@section('content')

<div class="flex gap-5 justify-between pb-3">

    <div class="flex flex-col w-full pr-3 gap-5 rounded-md">
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex justify-end">
                <button type="button" class="text-red-600 me-2">Hapus</button>
            </div>
            <div class="flex gap-3 items-center w-full  ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-16 h-16" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class=" ">
                <h6 class="text-md dark:text-white">Description: Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. A delectus, quam tenetur eligendi pariatur deserunt perspiciatis sint repellat reprehenderit.
                    Reiciendis esse, obcaecati corporis laborum dolorum quisquam voluptatum nihil. Porro, perspiciatis!
                </h6>
            </div>
            <div class="flex justify-between items-center ">
                <div class="h-full  flex items-center">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        Rp. 234.500
                    </p>
                </div>
                {{-- countable --}}
                <form class="max-w-xs">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="100" aria-describedby="helper-text-explanation"
                            class=" bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <div class="flex justify-center w-2/6 flex-none cart-total ">
        <div
            class="flex fixed flex-col gap-2 w-2/6 pl-5  max-w-sm  p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

            <div class="Total">
                <h5 class=" text-xl font-medium text-gray-500 dark:text-gray-400">Total</h5>
                <div class="flex items-baseline text-gray-900 dark:text-white">
                    <span class="text-2xl font-extrabold tracking-tight">Rp. 489.000</span>
                </div>

            </div>
            <div class="kurir">
                <h5 class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">Pilih Kurir</h5>
                <div class="flex items-center">
                    <input id="link-radio" type="radio" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-radio"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">JNE</label>
                </div>
                <div class="flex items-center">
                    <input id="link-radio" type="radio" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Post
                        Indonesia</label>
                </div>
                <div class="flex items-center">
                    <input id="link-radio" type="radio" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-radio"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tiki</label>
                </div>


            </div>

            <div class="paymentMethod">
                <h5 class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">Pilih Metode Pembayaran</h5>
                <div class="flex items-center">
                    <input checked id="default-radio" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">OVO</label>
                </div>
            </div>


            <div class="subtotal">
                <h5 class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">Biaya pengiriman</h5>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <span class="text-gray-500 dark:text-gray-400">JNE</span>
                    </div>
                    <span class="text-gray-900 dark:text-white">+Rp. 30.000</span>
                </div>
            </div>


            <div class="flex">


                <button type="button"
                    class=" mt-2 text-white bg- hover:bg-blue-900 focus:ring-4 bg-blue-700 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                    Bayar
                </button>
            </div>
        </div>
    </div>
    @endsection