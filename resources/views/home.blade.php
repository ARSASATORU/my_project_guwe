@extends('app')

@section('content')
<div style="text-align:center; padding:40px;">
    <h1 style="font-size:32px; font-weight:bold;">Selamat Datang </h1>
    <p>Website donasi untuk membantu sesama.</p>
</div>

<div style="margin-top:40px; padding:20px; border-radius:15px; background:linear-gradient(135deg,#4f46e5,#3b82f6); color:white;">
    <h2 style="font-size:24px; font-weight:bold;">Dukung Kami</h2>
    <p>Bantu kami berkembang dengan donasi Anda.</p>

    <form style="margin-top:15px;">
        <input type="number" placeholder="Masukkan nominal (Rp)"
            style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px; border:none;">

        <select style="width:100%; padding:10px; margin-bottom:10px; border-radius:8px;">
            <option>Pilih Metode Pembayaran</option>
            <option>Transfer Bank</option>
            <option>E-Wallet</option>
            <option>QRIS</option>
        </select>

        <button type="submit"
            style="width:100%; padding:10px; border:none; border-radius:8px; background:#facc15; font-weight:bold;">
            Donasi Sekarang 
        </button>
    </form>
</div>
@endsection