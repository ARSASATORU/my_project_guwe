@extends('partials.app')

@section('content')

<div class="container mx-auto p-6">

    <div class="bg-blue-600 text-white rounded-xl p-10 shadow-lg">

        <h1 class="text-5xl font-bold mb-4">
            Selamat Datang di PeduliBersama
        </h1>

        <p class="text-lg">
            Platform donasi online untuk membantu masyarakat yang membutuhkan.
        </p>

        <a
            href="/campaign"
            class="inline-block mt-6 bg-white text-blue-600 px-5 py-3 rounded font-semibold hover:bg-gray-200">

            Lihat Campaign

        </a>

    </div>

</div>

@endsection