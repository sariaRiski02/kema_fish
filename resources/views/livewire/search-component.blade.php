
    <form wire:submit.prevent='search' class="flex items-center flex-grow-3 mx-auto">
        <label for="simple-search" class="sr-only">
            Search
        </label>
        <div class="relative w-full">
            <input type="text" id="simple-search" wire:model='searchItem'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2 pr-10 dark:bg-gray-700 
                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-outfit"
                placeholder="Senar, lure, timah dll.." />
                <button type="submit" class="absolute right-0 top-0 mt-2 mr-2">
                    <img src="{{ asset('assets/icon/search.svg') }}" alt="" srcset="" class="w-6 h-6 mr-2">     
                </button>
            </div>
    </form>

