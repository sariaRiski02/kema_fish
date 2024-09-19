<div class="pt-32">
    <section class="bg-white dark:bg-gray-900 py-8 px-4 mx-auto max-w-screen-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
            <!-- Product Image -->
            <div class="flex justify-center">
                <img class="rounded-lg shadow-lg w-3/5" src="{{ asset('assets/image/rill.jpg') }}" alt="Product Image">
            </div>
    
            <!-- Product Details -->
            <div class="flex flex-col justify-center">
                <!-- Product Title -->
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">{{ $product->name }}</h1>
    
                <!-- Product Price -->
                <p class="mt-4 text-3xl font-bold text-gray-900 dark:text-white">Rp. {{ number_format($product->price) }}</p>
    
                <!-- Product Description -->
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    {{ $product->description }}
                </p>
    
                <!-- quantity product -->
                <div class="mt-6 flex items-center space-x-3">
                    <label for="quantity" class="block text-m font-medium text-gray-700 dark:text-gray-400">Tersisa: {{ $product->entity_product }}</label>
                    
                </div>
    
                <!-- Action Buttons -->
                <div class="mt-6 flex space-x-4 ">
                    <button wire:click='addToCart' class="px-5 py-3 text-white bg-blue-800 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-900 dark:focus:ring-blue-800 font-medium">
                       
                        <img src="{{ asset('assets/icon/cart-white.svg') }}" alt="" style="width: 24px; height: 24px;">
                    </button>
                    <button class="px-5 py-3 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800 font-medium">
                        Beli
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Additional Information Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Informasi produk</h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                {{ $product->additional_information }}
            </p>
        </div>
    </section>
    
</div>
