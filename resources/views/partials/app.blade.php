<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PeduliBersama</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100">

    {{-- NAVBAR --}}
    <nav class="bg-blue-600 text-white shadow">

        <div class="container mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                PeduliBersama
            </h1>

            <div class="flex gap-6">

                <a href="/" class="hover:text-gray-200">
                    Home
                </a>

                <a href="/campaign" class="hover:text-gray-200">
                    Campaign
                </a>

                <a href="/profil" class="hover:text-gray-200">
                    Profil
                </a>

                <a href="/kontak" class="hover:text-gray-200">
                    Kontak
                </a>

            </div>

        </div>

    </nav>

    {{-- CONTENT --}}
    <div class="py-6">

        @yield('content')

    </div>

    {{-- FOOTER --}}
    <footer class="bg-gray-800 text-white mt-10">

        <div class="container mx-auto px-6 py-6 text-center">

            <p class="text-lg font-semibold">
                PeduliBersama
            </p>

            <p class="text-gray-300 mt-2">
                Aplikasi Mini Donasi Sosial Berbasis Laravel & Tailwind CSS
            </p>

            <p class="mt-2 text-gray-400">
                © 2026 PeduliBersama
            </p>

        </div>

    </footer>

</body>
</html>