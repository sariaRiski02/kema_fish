<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
    <title>KemaFish</title>
</head>

<body class="bg-gray-100 text-gray-900 antialiased font-sans">
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg flex flex-col gap-3">

        <div class="flex items-center space-x-3 justify-center">
            <img src="{{ asset('assets/logo/blue.png') }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-3xl whitespace-nowrap
             dark:text-white font-outfit font-bold color-kema-fish" id="logo">
                KemaFish
            </span>
        </div>


        <p class="text-lg font-normal text-gray-700 dark:text-white">Widiih....! <span
                class=" font-bold uppercase text-[#00417C]">{{ $name }},</span>
            Terima kasih telah bergabung</p>



        <p class="text-gray-500 dark:text-gray-400">
            kamu telah mendaftar di website KemaFish dengan akun <span class="text-lg font-bold">
                {{ $email }}
            </span>
            nih ada kode di bawah berjumlah 6 digit yang harus kamu salin dan masukan pada kolom yang telah di tentukan
            ya..
            <br>

        </p>



        <p class="text-xl bg-gray-100 border border-gray-300 p-4 rounded-lg text-center font-mono">{{ $token }}</p>

        <span class=" font-bold uppercase text-xl text-[#00417C]">Ayo Belanja!!</span>
    </div>
</body>

</html>