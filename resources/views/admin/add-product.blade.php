@extends('admin.app')

@section('main')
    
<form class="p-4 sm:ml-64" method="POST" action="{{ route('admin.create-product') }}">
@csrf
{{-- name product --}}
<div class="mb-4">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Product</label>
    <input type="text" id="title" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan nama produk" >
</div>

{{-- entity product --}}
<div class="mb-4">
    <label for="entity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Produk</label>
    <input type="text" id="entity" name="entity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banyaknya produk" >
</div>

{{-- price --}}
<div class="mb-4">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga product per item" >
</div>

{{-- category --}}
<div class="mb-4">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Select category</option>
        <option value="category1">Category 1</option>
        <option value="category2">Category 2</option>
        <option value="category3">Category 3</option>
    </select>
</div>

{{-- img --}}
<div class="mb-4">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar produk</label>
    <div class="flex items-center justify-center w-full">
        <label for="image" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4a1 1 0 011-1h8a1 1 0 011 1v12m-4 0v4m-4-4v4m-4-4h12"></path>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik untuk upload</span> atau seret dan lepas</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF</p>
        </div>
        <input id="image" name="image" type="file" class="hidden" />
        </label>
    </div>
</div>

{{-- description --}}
<div class="mb-4">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
    <textarea id="description" name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product description" ></textarea>
</div>

{{-- detail description --}}
<div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
        <label for="detail_description" class="sr-only">Deskripsi Detail</label>
        <textarea id="detail_description" name="detail_description" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write detailed description..." ></textarea>
    </div>
    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Upload produk 
        </button>
        
    </div>
</div>
</form>
 
@endsection