<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation Token</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto max-w-lg bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800">Hello, {{ $name }}!</h1>

        <p class="mt-4 text-gray-600">Terima kasih telah mendaftar! Untuk mengaktifkan akun Anda, silakan gunakan verifikasi
 Kode di bawah ini:</p>

        <div class="mt-6 bg-gray-100 border border-gray-300 p-4 rounded-lg">
            <p class="text-xl font-semibold text-center text-indigo-600">{{ $token }}</p>
        </div>

        <p class="mt-6 text-gray-600">Kode ini berlaku untuk 5 menit ke depan. Jika Anda tidak meminta email ini,
 Harap abaikan.</p>

        <p class="mt-6 text-gray-600">Salam,<br>KemaFish</p>

        <div class="mt-6 text-center">
            <button class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Activate Account
            </button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
