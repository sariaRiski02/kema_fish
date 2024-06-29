@extends('app.index')

@section('header')
@include('headers.header')
@endsection


@section('content')

<div class="flex gap-5">
    <div class="flex flex-col p-5 grow border rounded-md">
        <div class="flex-col flex gap-3 bg-white drop-shadow-md p-3">
            <div class="flex gap-3 items-center w-full ">
                <img src="{{ asset('/assets/image/rill.jpg') }}" class="w-10 h-10" alt="">
                <h6 class="text-lg font-bold dark:text-white">Rill Daido 6000</h6>
            </div>
            <div class="flex pl-16">
                <h6 class="text-md dark:text-white">Rp. 234.500</h6>
            </div>
        </div>

    </div>
    <div class="flex-none w-80 h-5 bg-red-600">
        <div></div>
    </div>
</div>

@endsection