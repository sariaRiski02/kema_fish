<div class="phone flex fixed w-full bottom-0 h-20  border bg-white">

    <div class="flex items-center justify-center w-1/4">
        <a href="{{ route('home') }}"
            class="flex items-center justify-center text-white font-medium rounded-lg text-sm px-5 py-2 text-center gap-2">
            <img src="{{ asset('/assets/icon/Home_fill.svg') }}" alt="">
        </a>
    </div>

    <div class="flex items-center justify-center w-1/4">
        <a href="{{ route('cart') }}"
            class="flex items-center justify-center text-white font-medium rounded-lg text-sm px-5 py-2 text-center gap-2">
            <img src="{{ asset('/assets/icon/Basket_alt_3.svg') }}" alt="">
        </a>
    </div>
    <div class="flex items-center justify-center w-1/4">
        <a href="#"
            class="flex items-center justify-center text-white font-medium rounded-lg text-sm px-5 py-2 text-center gap-2">
            <img src="{{ asset('/assets/icon/pin_alt_fill.svg') }}" alt="">
        </a>
    </div>
    <div class="flex items-center justify-center w-1/4">
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="flex items-center justify-center text-white font-medium rounded-lg text-sm px-5 py-2 text-center gap-2">
            <img src="{{ asset('/assets/icon/user_alt_fill.svg') }}" alt="">
        </button>
    </div>

</div>