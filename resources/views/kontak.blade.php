@extends('app')

@section('content')
<div style="max-width:500px; margin:auto; padding:40px;">
    <h1 style="font-size:28px; font-weight:bold;">Hubungi Kami </h1>

    <form style="margin-top:20px;">
        <input type="text" placeholder="Nama"
            style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px;">

        <input type="email" placeholder="Email"
            style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px;">

        <textarea placeholder="Pesan"
            style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px;"></textarea>

        <button style="padding:10px; background:#3b82f6; color:white; border:none; border-radius:8px;">
            Kirim
        </button>
    </form>

    <hr style="margin:30px 0;">

    <div style="padding:20px; border-radius:15px; background:#f3f4f6;">
        <h2 style="font-size:22px; font-weight:bold;"> Ingin Berdonasi?</h2>
        <p>Dukungan Anda sangat berarti bagi kami.</p>

        <form style="margin-top:15px;">
            <input type="number" placeholder="Nominal Donasi"
                style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px;">

            <button style="width:100%; padding:10px; border:none; border-radius:8px; background:#3b82f6; color:white;">
                Kirim Donasi
            </button>
        </form>
    </div>
</div>
@endsection