<div class="pt-36 px-10">

    <div class="flex flex-col gap-4" id="category-container">

        <div class="text-lg text-black font-outfit font-bold">Kategori</div>

        <div class="flex gap-2 overflow-x-scroll p-4 scroll-smooth" id="scrollbar">

            @foreach ($categories as $category)
            <a href="#">
                <div class="flex flex-col justify-center items-center w-32 h-32 rounded-2xl border" id="category">
                    <img src="{{ asset('/assets/logo/blue.png') }}" alt="product" class="w-16" id="category-img">
                    <span class="font-outfit" id="category-text">{{ $category->name }}</span>

                </div>
            </a>
            @endforeach

        </div>

    </div>

    <div class="flex flex-col gap-4">

        <div class="text-lg text-black font-outfit font-bold">Produk</div>

        <div class="flex flex-row gap-2 justify-start flex-wrap">


            @foreach ($products as $product)

            <div class="flex flex-col justify-center items-center grow-3 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                id="product">

                <a href="/product/code">
                    <img class="p-8" src="{{ asset('/assets/logo/blue.png') }}" alt="product image" id="product-img"
                        style="max-width: 200px; max-height: 200px;" />
                </a>
                <div class="px-2 pb-3 w-full" id="container-text-product">
                    <a href="#">
                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white"
                            id="text-product">
                            {{ $product->name }}
                        </h5>
                    </a>

                    <div class="flex items-center justify-between pt-3 pb-5">
                        <span class="text-md font-bold text-gray-900 dark:text-white" id="price">Rp. {{
                            number_format($product->price)
                            }}</span>
                        <a href="#" id="cart">
                            <img src="{{ asset('/assets/icon/Basket_alt_3.svg') }}" id="image-cart">
                        </a>
                    </div>
                </div>
            </div>

            @endforeach




        </div>
    </div>

</div>