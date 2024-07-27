<div>
    <!-- Form Data Pribadi -->
    <form action="{{ route('settings.update.personal') }}" method="POST">
        @csrf
        <div class="py-5">
            Data Pribadi
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama depan
                </label>
                <input type="text" id="first_name" name="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('first_name') border-red-500 @enderror"
                    placeholder="John" value="{{ old('first_name') }}" />
                @error('first_name')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Belakang</label>
                <input type="text" id="last_name" name="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('last_name') border-red-500 @enderror"
                    placeholder="Doe" value="{{ old('last_name') }}" />
                @error('last_name')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Simpan Data Pribadi
        </button>
    </form>
    {{-- Form update password --}}
    <form action="{{ route('settings.update.password') }}" method="POST">
        @csrf
        <div class="py-5">
            Ubah Password
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password Saat Ini
                </label>
                <input type="password" id="current_password" name="current_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('current_password') border-red-500 @enderror"
                    placeholder="••••••••" />
                @error('current_password')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password Baru
                </label>
                <input type="password" id="new_password" name="new_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('new_password') border-red-500 @enderror"
                    placeholder="••••••••" />
                @error('new_password')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="new_password_confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Konfirmasi Password Baru
                </label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="••••••••" />
            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Simpan Data Pribadi
        </button>

    </form>
    <!-- Form Kontak -->
    <form action="{{ route('settings.update.contact') }}" method="POST">
        @csrf
        <div class="py-5">
            Kontak
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">

            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                    Hp</label>
                <input type="tel" id="telephone" name="phone"
                    class="border bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('phone') border-red-500 @enderror"
                    placeholder="123-45-678" value="{{ old('phone') }}" />
                @error('phone')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Simpan Kontak
        </button>
    </form>

    <!-- Form Alamat -->
    <form action="{{ route('settings.update.address') }}" method="POST">
        @csrf
        <div class="py-5">
            Alamat
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Provinsi
                </label>
                <input type="text" id="province" name="province"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('province') border-red-500 @enderror"
                    placeholder="Jawa Barat" required value="{{ old('province') }}" />
                @error('province')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Kabupaten/Kota
                </label>
                <input type="text" id="city" name="city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('city') border-red-500 @enderror"
                    placeholder="Bandung" required value="{{ old('city') }}" />
                @error('city')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="subdistrict" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Kecamatan
                </label>
                <input type="text" id="subdistrict" name="subdistrict"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('district') border-red-500 @enderror"
                    placeholder="Cibeunying Kaler" required value="{{ old('district') }}" />
                @error('district')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="village" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Desa/Kelurahan</label>
                <input type="text" id="village" name="village"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('village') border-red-500 @enderror"
                    placeholder="Cigadung" required value="{{ old('village') }}" />
                @error('village')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:col-span-2">
                <label for="address_details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Detail alamat
                </label>
                <textarea id="address_details" name="address_details" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('address_details') border-red-500 @enderror"
                    placeholder="RT II, RW 3, Gang no 2. dll....">{{ old('address_details') }}</textarea>
                @error('address_details')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Simpan Alamat
        </button>
    </form>
</div>