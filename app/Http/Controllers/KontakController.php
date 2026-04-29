<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            'email' => '241230043@email.com',
            'telepon' => '085753919043',
            'alamat' => 'Pontianak, Kalimantan Barat'
        ];

        return view('kontak', $data);
    }
}