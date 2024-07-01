@extends('app.index')



@section('header')
@include('components.headers.header')
@endsection

@section('content')

{{-- @include('banners.banner') --}}

@include('components.category')

@include('components.product')

{{-- modal authentication --}}
@include('components.login')

@endsection