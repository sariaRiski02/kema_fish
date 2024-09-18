<div>
  

  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        
        <div>
            <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Signin
                </h2>
                @session('error')
                <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <div class="ms-3 text-sm font-medium">
                    {{ session('error') }}
                  </div>
                  <button type="button" onclick="tutup()" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                  </button>
                </div>
                @endsession
                <form class="mt-8  space-y-6" wire:submit.prevent='signin'>
                  @csrf
                    <div>
                        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" wire:model.defer='form.email' name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@kemafish.com" required />
                        @error('form.email')
                            <span class="text-sm text-red-600 dark:text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                        <input type="password" name="password" wire:model.defer='form.password' id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        @error('form.password')
                        <span class="text-sm text-red-600 dark:text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                    
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                      Belum punya akun? <a href="{{ route('signup') }}" class="text-blue-700 hover:underline dark:text-blue-500">Daftar</a>
                    </div>
                    <div class="mt-4">
                      <a href="{{ route('auth.google.redirect') }}"
                          class="flex items-center justify-center text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-gray-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:bg-gray-700">
                          <img src="{{ asset('/assets/icon/google.svg') }}" alt="google" class="w-5 h-5 mr-2" />
                          Masuk Dengan Google
                      </a>
                  </div>
                    
                </form>
                

            </div>
        </div>
        <div class="flex flex-col justify-center">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Kema Fish</h1>
          <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">"Temukan segala kebutuhan memancing Anda di Kema Fish! Dari joran hingga umpan, kami menyediakan peralatan terbaik untuk pengalaman memancing yang tak terlupakan."</p>
          
          <a href="{{ route('home') }}" target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Kembali ke Beranda
              <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
      </div>
    </div>
</section>

<script>
  function tutup(){
  

  let alertBox = document.querySelector('#alert-2');
 
    alertBox.style.display = 'none';
 
}
</script>
</div>

