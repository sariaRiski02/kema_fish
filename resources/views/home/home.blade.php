@extends('app.index')



@section('header')
@include('headers.header')
@endsection

@section('content')

{{-- @include('banners.banner') --}}

@include('categories.category')

@include('products.product')

{{-- modal authentication --}}
@include('login.login')

@endsection