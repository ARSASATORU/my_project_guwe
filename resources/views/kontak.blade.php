@extends('app')

@section('content')
<h1>Halaman Kontak</h1>

<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Telepon:</strong> {{ $telepon }}</p>
<p><strong>Alamat:</strong> {{ $alamat }}</p>
@endsection