@extends('partials.app')

@section('content')

<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-center">
        PeduliBersama
    </h1>

    {{-- FORM --}}
    <div class="bg-white p-6 rounded shadow mb-8">

        <form
            action="{{ isset($edit) ? route('campaign.update', $edit->id) : route('campaign.store') }}"
            method="POST">

            @csrf

            @if(isset($edit))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label class="block mb-2">Judul Donasi</label>

                <input type="text"
                    name="title"
                    class="w-full border p-2 rounded"
                    value="{{ isset($edit) ? $edit->title : '' }}"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>

                <textarea
                    name="description"
                    class="w-full border p-2 rounded"
                    required>{{ isset($edit) ? $edit->description : '' }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Target Donasi</label>

                <input type="number"
                    name="target_donation"
                    class="w-full border p-2 rounded"
                    value="{{ isset($edit) ? $edit->target_donation : '' }}"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Dana Terkumpul</label>

                <input type="number"
                    name="collected_donation"
                    class="w-full border p-2 rounded"
                    value="{{ isset($edit) ? $edit->collected_donation : 0 }}"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Deadline</label>

                <input type="date"
                    name="deadline"
                    class="w-full border p-2 rounded"
                    value="{{ isset($edit) ? $edit->deadline : '' }}"
                    required>
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                {{ isset($edit) ? 'Update' : 'Tambah' }}
            </button>

        </form>
    </div>

    {{-- DATA --}}
    <div class="grid gap-4">

        @foreach($campaigns as $item)

        <div class="bg-white p-5 rounded shadow">

            <h2 class="text-2xl font-bold">
                {{ $item->title }}
            </h2>

            <p class="mt-2 text-gray-600">
                {{ $item->description }}
            </p>

            <div class="mt-3">
                <p>
                    Target:
                    Rp {{ number_format($item->target_donation) }}
                </p>

                <p>
                    Terkumpul:
                    Rp {{ number_format($item->collected_donation) }}
                </p>

                <p>
                    Deadline:
                    {{ $item->deadline }}
                </p>
            </div>

            <div class="mt-4 flex gap-2">

                <a href="{{ route('campaign.edit', $item->id) }}"
                    class="bg-yellow-400 px-3 py-1 rounded">
                    Edit
                </a>

                <form
                    action="{{ route('campaign.destroy', $item->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        class="bg-red-500 text-white px-3 py-1 rounded">
                        Hapus
                    </button>

                </form>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection