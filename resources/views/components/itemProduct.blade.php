<div>
    <div class=" flex justify-evenly gap-3" id="itemProduct">
        <div class="">
            <img src="{{ asset('/assets/image/rill.jpg') }}" alt="" class="w-100">
        </div>
        <div class=" flex flex-col">
            <h1 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-900  dark:text-white">
                We invest in the world’s potential
            </h1>
            <span class="text:md font-bold font-outfit">Deskripsi: </span>
            <p class="mb-8 text-sm font-outfit text-gray-500 lg:text-md dark:text-gray-400">
                <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore suscipit pariatur, ea earum ipsa nam?
                Voluptatum minus culpa fuga error placeat qui, tempora optio tempore consequuntur enim quaerat nam
                ut!Numquam quia adipisci, enim officia corrupti minima ipsam veniam animi sequi optio quos! Assumenda ab
                ratione fuga culpa distinctio quisquam quae, laboriosam, vitae amet ut nesciunt adipisci atque tempore
                magni?
            </p>

            <div class="flex justify-start item-center gap-3 ">
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
                <button type="button"
                    class="text-black border border-[#3b5998] font-medium rounded-lg text-sm px-5  text-center inline-flex items-center  ">
                    <img src="{{ asset('/assets/icon/cart.svg') }}" alt="">
                </button>
                <button type="button"
                    class="text-black border border-[#3b5998] font-medium rounded-lg text-sm px-5  text-center inline-flex items-center  ">
                    Langsung Beli
                </button>
            </div>

        </div>


    </div>
</div>