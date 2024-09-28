@extends('admin.app')


@section('main')


<div class="p-4 sm:ml-64">
   <div class=" flex flex-wrap gap-3">
        <div class="block grow-3 p-6 bg-white border border-gray-200 rounded-lg shadow 
        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Jumlah Produk
            </h5>
            <p class="text-xl font-bold text-gray-700 dark:text-gray-400">
                {{ $count }}
            </p>
        </div>
        <div class="block grow-3 p-6 bg-white border border-gray-200 rounded-lg shadow 
        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Rata-Rata harga produk
            </h5>
            <p class="text-xl font-bold text-gray-700 dark:text-gray-400">
                Rp. {{ number_format($avarageProduct) }}
            </p>
        </div>
        <div class="block grow-3 p-6 bg-white border border-gray-200 rounded-lg shadow 
        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold  tracking-tight text-gray-900 dark:text-white">
                Jumlah Semua Produk
            </h5>
            <p class="text-xl font-bold text-gray-700 dark:text-gray-400">
                {{ $entityProduct }}
            </p>
        </div>   
   </div>

   {{-- list product --}}
   

   <div class="mt-5 border relative overflow-x-auto shadow-lg sm:rounded-lg">
    
    <div class="flex justify-between items-center">
    
    {{-- search input --}}
    <div class="p-5 bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <form class="flex gap-2 items-center" method="POST" action="{{ route('admin.search-product') }}">
            @csrf
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" name="search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                
            </div>
            <button type="submit" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
            </button>
            <a href="{{ route('admin.product') }}" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                refresh
            </a>


            
        </form>
        
    </div>
    {{-- add product --}}

    <div class="p-5">

        <a href="{{ route('admin.create-product') }}" class="text-white bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            + produk
        </a>
    </div>

</div>


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th class="px-6 py-3">Nama Produk</th>
                <th class="px-6 py-3">Jumlah Produk</th>
                <th class="px-6 py-3">Kategori</th>
                <th class="px-6 py-3">Harga</th>
                <th class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $product->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $product->entity_product }}
                </td>
                <td class="px-6 py-4">
                    {{ $product->category->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $product->price }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.update-product',$product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
    
   </div>

</div>

<script>
    // Dapatkan elemen checkbox Select All
    const selectAllCheckbox = document.getElementById('checkbox-all');
    
    // Dapatkan semua checkbox dalam tabel
    const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
    
    // Event listener untuk checkbox Select All
    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>

    
@endsection