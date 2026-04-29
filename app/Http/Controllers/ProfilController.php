<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Arsa Mulyana',
            'nim' => '241230043',
            'prodi' => 'Sistem Informasi',
            'kelas' => 'SI 6A'
        ];

        return view('profil', $data);
    }
}