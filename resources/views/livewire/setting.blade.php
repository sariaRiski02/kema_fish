<div class="container mx-auto pt-36 pb-4 px-4 sm:px-6 lg:px-8 max-w-2xl">
    <!-- Form Update Data Diri -->
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Update Data Diri</h2>
    <form wire:submit='update'>
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <!-- Nama -->
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" wire:model='form.name' id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="John Doe"  />
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" wire:model='form.password' id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:text-white" placeholder="•••••••••" />
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                <input type="password" wire:model='form.password_confirmation' id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:text-white" placeholder="•••••••••"  />
                @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Phone -->
            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                <input type="text" wire:model='form.phone' id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="123-45-678" />
                @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        

        <!-- Submit Button -->
        <button type="submit" class="w-full lg:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Perubahan</button>
    </form>

    <!-- Form Update Alamat -->
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">Update Alamat</h2>
    <form wire:submit.prevent='updateAddress'>
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <!-- Province -->
            <div>
                <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                <input type="text" wire:model='province' id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="contoh: sulawesi utara" required />
                @error('province') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- City -->
            <div>
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten/kota</label>
                <input type="text" wire:model='city' id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="contoh: Minahasa utara" required />
                @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- District -->
            <div>
                <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                <input type="text" wire:model='district' id="district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="contoh: kema" required />
                @error('district') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Village -->
            <div>
                <label for="village" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa/kelurahan</label>
                <input type="text" wire:model='village' id="village" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="contoh: kema 3" required />
                @error('village') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Address Detail -->
            <div class="lg:col-span-2">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat lengkap</label>
                <textarea wire:model='address' id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="contoh: jl imam bonjol linkungan 5 desa kema 3" required></textarea>
                @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full lg:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>