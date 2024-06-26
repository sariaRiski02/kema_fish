@extends('app.index')



@section('content')

{{-- @include('banners.banner') --}}

@include('categories.category')

@include('products.product')

@include('footers.footer')

@endsection