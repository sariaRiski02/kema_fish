@extends('app.index')
<style>
    /* Custom CSS to hide spinner controls */
    /* For Chrome, Safari, Edge, Opera */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* For Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>
@section('header')
@include('components.headers.signupHeader')
@endsection

@section('content')

<div class="flex w-full h-72 mb-24  items-center justify-center ">

    <div class="flex flex-col w-96">
        <label for="default-input" class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white">
            Masukan Kode Verifikasi
        </label>
        <form action="{{ route('signup.verify') }}" method="POST">

            @csrf
            <input type="number" name="tokenActivation" id="default-input" class="
            bg-gray-50 border border-gray-300 text-gray-900 text-3xl 
                ztext-decoration-none text-center rounded-lg focus:ring-blue-500 flex items-center focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-b lue-500 dark:focus:border-blue-500 font-bold">



            <div class="flex justify-center">

                <button type="submit"
                    class="bg-[#00417C] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md mt-4">
                    Verifikasi
                </button>
            </div>
        </form>
        @error('tokenActivation')
        <p id="filled_error_help"
            class="mt-2 text-md text-red-600 font-outfit dark:text-red-400 flex justify-center items-center">
            <span class="font-medium">
                Waduh..! </span> {{ $message }}
        </p>
        @enderror

    </div>
</div>

@endsection