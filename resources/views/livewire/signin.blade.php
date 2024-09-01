<div class="pt-40">

  @session('error')
  <div id="toast-bottom-left" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-red-700 divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow bottom-5 left-5 text-white dark:divide-gray-700 dark:bg-gray-800" role="alert">
    <div class="text-sm font-normal">{{ session('error') }}</div>
</div>
  @endsession



  <form class="max-w-sm mx-auto" wire:submit.prevent='signin'>
    @csrf
      <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
          <input type="email" name="email" wire:model.defer='form.email' id="email" class="bg-gray-50 border @error('form.email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
          @error('form.email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>
      <div class="mb-5">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
          <input type="password" name="password" wire:model.defer='form.password' id="password" class="bg-gray-50 border @error('form.password') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
          @error('form.password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>
      
      <button type="submit" class="mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      
      @if (session()->has('message'))
          <div class="mt-3 text-green-500">
              {{ session('message') }}
          </div>
      @endif
  </form>
</div>

