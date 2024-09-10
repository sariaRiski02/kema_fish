<div class="pt-40">
    
    <form wire:submit.prevent='verify' class="flex justify-center h-96 flex-col gap-5 items-center">

        
        @error('code')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <input type="text" wire:model='code' class="w-96 p-2 border text-center font-bold border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan kode verifikasi" inputmode="numeric">
        <div>
            <p class="text-center text-sm text-gray-500">Kode verifikasi telah dikirimkan ke email anda</p>
            <div id="countdown" class="text-center text-sm text-gray-500"></div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Verifikasi</button>
    
    </form>
    <script>
        // Countdown timer
        var countdownElement = document.getElementById('countdown');
        var countdownTime = {{ $expired_at }}

        function startCountdown() {
            var countdownInterval = setInterval(function() {
                countdownTime--;
                var minutes = Math.floor(countdownTime / 60);
                var seconds = countdownTime % 60;
                countdownElement.textContent = minutes + ':' + (seconds < 10 ? '0' : '') + seconds + ' Tersisa';

                if (countdownTime <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = 'Time expired';
                }
            }, 1000);
        }
        startCountdown();
    </script>

</div>
