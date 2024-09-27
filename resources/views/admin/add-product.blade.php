@extends('admin.app')

@section('main')


{{-- alert --}}




@session ('error')
<div id="alert-2" class="fixed z-50 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Gagal</span>
    <div class="ms-3 text-sm font-medium">
       {{ session('error') }}
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
  </div>
@endsession

@session('success')
    
<div id="alert-3" class="fixed m-10 z-50 flex items-center p-4 mb-4 text-white-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Success</span>
    <div class="ms-3 text-sm font-medium">
      {{ session('success') }} tafjdakf;ja;skj
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
  </div>
@endsession




  {{-- end alert --}}



    
<form class="p-4 sm:ml-64" method="POST" action="{{ route('admin.create-product') }}" enctype="multipart/form-data">
@csrf
{{-- name product --}}
<div class="mb-4">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Product</label>
    <input type="text" id="title" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan nama produk" value="{{ old('name') }}" >
    @error('name')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- entity product --}}
<div class="mb-4">
    <label for="entity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Produk</label>
    <input type="text" id="entity" name="entity_product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Banyaknya produk" value="{{ old('entity_product') }}">
    @error('entity_product')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- price --}}
<div class="mb-4">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga product per item" value="{{ old('price') }}">
    @error('price')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- category --}}
<div class="mb-4">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Select category</option>
        @foreach ($categories as $category)
            
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        
    </select>
    @error('category')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- img --}}
<div class="mb-4">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar produk</label>
    <div class="flex items-center justify-center w-full">
        <label for="image" id="image-label" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6" id>
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4a1 1 0 011-1h8a1 1 0 011 1v12m-4 0v4m-4-4v4m-4-4h12"></path>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                <span class="font-semibold" id="upload-text">Klik untuk upload</span> 
                atau seret dan lepas</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF</p>
        </div>
        <input id="image" name="image" type="file" class="hidden" />
        </label>
    </div>
    @error('image')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


{{-- description --}}
<div class="mb-4">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
    <textarea id="description" name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product description">{{ old('description') }}</textarea>
    @error('description')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- detail description --}}
<div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
        <label for="detail_description" class="sr-only">Deskripsi Detail</label>
        <textarea id="detail_description" name="detail_description" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write detailed description..."  >{{ old('detail_description') }}</textarea>
    </div>
    @error('detail_description')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Upload produk 
        </button>
        
    </div>
</div>
</form>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const input = event.target;
        const label = document.getElementById('upload-text');

        if (input.files && input.files.length > 0) {
            // Ganti teks dengan nama file yang diupload
            label.textContent = input.files[0].name;
        } else {
            // Jika tidak ada file yang dipilih, kembalikan teks awal
            label.textContent = 'Klik untuk upload atau seret dan lepas';
        }
    });
</script>
 
@endsection