<div class="pt-36 px-10">

    <div class="flex flex-col gap-4" id="category-container">

        <div class="text-lg text-black font-outfit font-bold">Kategori</div>

        <div class="flex gap-2 overflow-x-scroll p-4 scroll-smooth" id="scrollbar">

            @foreach ($categories as $category)
            <button wire:click='byCategory("{{ $category->id }}")'>
                
                <div class="flex flex-col justify-center items-center w-32 h-32 rounded-2xl border" id="category">
                    <img src="{{ asset('/assets/logo/blue.png') }}" alt="product" class="w-16" id="category-img">
                    <span class="font-outfit" id="category-text">{{ $category->name }}</span>
                </div>
            </button>
            @endforeach

        </div>

    </div>

    <div class="flex flex-col gap-4">

        <div class="text-lg text-black font-outfit font-bold">Produk</div>

        <div class="flex flex-row gap-2 justify-start flex-wrap">


            @foreach ($products as $product)

            <div class="flex flex-col justify-center items-center grow-3 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                id="product">

                <a href="/product/{{ $product->id }}">
                    <img class="p-8" src="https://picsum.photos/400/300" alt="product image" id="product-img"
                        style="max-width: 200px; max-height: 200px;" />
                </a>
                <div class="px-2 pb-3 w-full" id="container-text-product">
                    <a href="/product/{{ $product->id }}">
                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white"
                            id="text-product">
                            {{ $product->name }}
                        </h5>
                    </a>

                    <div class="flex items-center justify-between pt-3 pb-5">
                        <span class="text-md font-bold text-gray-900 dark:text-white" id="price">Rp. {{
                            number_format($product->price)
                            }}</span>
                        <button class="border rounded-md border-gray-700 p-2" id="notif" 
                        @auth
                        onclick="notif()"     
                        @endauth
                        wire:click="addToCart('{{ $product->id }}')" id="cart">
                            <img src="{{ asset('/assets/icon/Basket_alt_3.svg') }}" id="image-cart">
                        </button>
                    </div>
                </div>
            </div>

            @endforeach




        </div>

        {{-- notification for add cart --}}
        <div id="alert-3" class="hidden fixed z-50 top-5 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Berhasil</span>
            <div class="ms-3 text-sm font-medium">
              Berhasil di simpan di keranjang
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
          </div>    
        </div>

    <script>
        
        const alert = document.querySelector('#alert-3');
        
        function notif(){
            alert.classList.remove('hidden');

            setTimeout(() => {
            alert.classList.add('hidden');
        }, 4000);
        }
        
        
    </script>
</div>