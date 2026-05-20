@extends('partials.app')

@section('content')

<div class="container mx-auto p-6">

    <div class="bg-white rounded-xl shadow p-8">

        <h1 class="text-4xl font-bold text-blue-600 mb-6">
            Profil Aplikasi
        </h1>

        <p class="text-gray-700 leading-8">

            PeduliBersama adalah aplikasi mini berbasis Laravel
            yang digunakan untuk membantu pengelolaan campaign
            donasi sosial secara digital.

        </p>

        <p class="text-gray-700 leading-8 mt-4">

            Aplikasi ini memiliki fitur CRUD
            (Create, Read, Update, Delete)
            untuk mengelola data campaign donasi.

        </p>

        <div class="mt-6">

            <h2 class="text-2xl font-bold mb-3">
                Teknologi yang Digunakan
            </h2>

            <ul class="list-disc ml-6 text-gray-700 space-y-2">

                <li>Laravel Framework</li>

                <li>Tailwind CSS</li>

                <li>MySQL Database</li>

                <li>GitHub Repository</li>

            </ul>

        </div>

    </div>

</div>

@endsection