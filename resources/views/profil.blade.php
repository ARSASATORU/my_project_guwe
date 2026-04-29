@extends('app')

@section('content')
<h1>Halaman Profil</h1>

<p><strong>Nama:</strong> {{ $nama }}</p>
<p><strong>NIM:</strong> {{ $nim }}</p>
<p><strong>Program Studi:</strong> {{ $prodi }}</p>
<p><strong>Kelas:</strong> {{ $kelas }}</p>
@endsection