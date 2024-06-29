@extends('app.index')



@section('header')
@include('headers.header')
@endsection

@section('content')

{{-- @include('banners.banner') --}}

@include('categories.category')

@include('products.product')

@include('footers.footer')

{{-- modal authentication --}}
@include('login.login')

@endsection