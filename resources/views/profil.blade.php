@extends('app')

@section('content')
<div style="max-width:500px; margin:auto; padding:40px;">
    <h1 style="font-size:28px; font-weight:bold;">Profil Saya </h1>

    <div style="background:#f3f4f6; padding:15px; border-radius:10px; margin-top:20px;">
        <p><strong>Nama:</strong> User</p>
        <p><strong>Email:</strong> user@email.com</p>
    </div>

    <div style="margin-top:30px;">
        <h2 style="font-weight:bold;"> Progress Donasi</h2>

        <div style="width:100%; background:#e5e7eb; border-radius:10px; height:15px; margin-top:10px;">
            <div style="width:60%; background:#22c55e; height:15px; border-radius:10px;"></div>
        </div>

        <p style="font-size:12px; margin-top:5px;">Rp 5.000.000 dari Rp 10.000.000</p>
    </div>

    <div style="margin-top:20px; padding:20px; border-radius:15px; background:#1e293b; color:white;">
        <h2 style="font-size:22px; font-weight:bold;"> Donasi Lagi</h2>

        <form style="margin-top:10px;">
            <input type="number" placeholder="Nominal"
                style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px; border:none;">

            <button style="width:100%; padding:10px; border:none; border-radius:8px; background:#facc15; font-weight:bold;">
                Donasi 
            </button>
        </form>
    </div>
</div>
@endsection