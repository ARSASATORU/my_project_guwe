<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');                      
