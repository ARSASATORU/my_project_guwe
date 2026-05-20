<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

Route::get('/', function () {

    return view('home');

});

Route::get('/profil', function () {

    return view('profil');

});

Route::get('/kontak', function () {

    return view('kontak');

});

Route::resource('campaign', CampaignController::class);