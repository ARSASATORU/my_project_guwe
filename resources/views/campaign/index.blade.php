@extends('partials.app')

@section('content')

<div class="container mx-auto p-6">

    {{-- HERO --}}
    <div class="bg-blue-600 text-white rounded-xl p-10 mb-8 shadow-lg">

        <h1 class="text-5xl font-bold mb-4">
            PeduliBersama
        </h1>

        <p class="text-lg">
            Platform donasi online untuk membantu masyarakat yang membutuhkan.
        </p>

    </div>

    {{-- ALERT --}}
    @if(session('success'))

        <div class="bg-green-500 text-white p-3 rounded mb-4">

            {{ session('success') }}

        </div>

    @endif

    {{-- ERROR --}}
    @if($errors->any())

        <div class="bg-red-500 text-white p-3 rounded mb-4">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    {{-- STATISTIK --}}
    <div class="grid grid-cols-3 gap-4 mb-8">

        <div class="bg-white p-6 rounded shadow text-center">

            <h2 class="text-3xl font-bold text-blue-600">
                {{ $campaigns->count() }}
            </h2>

            <p>Total Campaign</p>

        </div>

        <div class="bg-white p-6 rounded shadow text-center">

            <h2 class="text-3xl font-bold text-green-600">
                Aktif
            </h2>

            <p>Donasi Berjalan</p>

        </div>

        <div class="bg-white p-6 rounded shadow text-center">

            <h2 class="text-3xl font-bold text-red-600">
                Peduli
            </h2>

            <p>Gerakan Sosial</p>

        </div>

    </div>

    {{-- FORM --}}
    <div class="bg-white p-6 rounded shadow mb-8">

        <h2 class="text-2xl font-bold mb-4">

            {{ isset($edit) ? 'Edit Campaign' : 'Tambah Campaign' }}

        </h2>

        <form
            action="{{ isset($edit) ? route('campaign.update', $edit->id) : route('campaign.store') }}"
            method="POST">

            @csrf

            @if(isset($edit))
                @method('PUT')
            @endif

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Judul Donasi
                </label>

                <input
                    type="text"
                    name="title"
                    class="w-full border p-3 rounded"
                    value="{{ isset($edit) ? $edit->title : '' }}"
                    required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    class="w-full border p-3 rounded"
                    required>{{ isset($edit) ? $edit->description : '' }}</textarea>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Target Donasi
                </label>

                <input
                    type="number"
                    name="target_donation"
                    class="w-full border p-3 rounded"
                    value="{{ isset($edit) ? $edit->target_donation : '' }}"
                    required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Dana Terkumpul
                </label>

                <input
                    type="number"
                    name="collected_donation"
                    class="w-full border p-3 rounded"
                    value="{{ isset($edit) ? $edit->collected_donation : 0 }}"
                    required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Deadline
                </label>

                <input
                    type="date"
                    name="deadline"
                    class="w-full border p-3 rounded"
                    value="{{ isset($edit) ? $edit->deadline : '' }}"
                    required>

            </div>

            <button
                class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">

                {{ isset($edit) ? 'Update' : 'Tambah' }}

            </button>

        </form>

    </div>

    {{-- LIST CAMPAIGN --}}
    <div class="grid gap-6">

        @foreach($campaigns as $item)

        <div class="bg-white p-6 rounded-xl shadow">

            <h2 class="text-2xl font-bold text-blue-600">
                {{ $item->title }}
            </h2>

            <p class="mt-3 text-gray-600">
                {{ $item->description }}
            </p>

            <div class="mt-4 space-y-2">

                <p>📞 Contact Person: 081234567890</p>

                <p>
                    🎯 Target:
                    Rp {{ number_format($item->target_donation) }}
                </p>

                <p>
                    💰 Terkumpul:
                    Rp {{ number_format($item->collected_donation) }}
                </p>

                <p>
                    📅 Deadline:
                    {{ $item->deadline }}
                </p>

            </div>

            {{-- PROGRESS --}}
            <div class="w-full bg-gray-200 rounded-full h-4 mt-4">

                <div
                    class="bg-green-500 h-4 rounded-full"
                    style="width: {{ min(100, ($item->target_donation > 0 ? ($item->collected_donation / $item->target_donation) * 100 : 0)) }}%">
                </div>

            </div>

            {{-- BUTTON --}}
            <div class="mt-5 flex gap-3">

                <a
                    href="{{ route('campaign.edit', $item->id) }}"
                    class="bg-yellow-400 px-4 py-2 rounded hover:bg-yellow-500">

                    Edit

                </a>

                <form
                    action="{{ route('campaign.destroy', $item->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">

                        Hapus

                    </button>

                </form>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection