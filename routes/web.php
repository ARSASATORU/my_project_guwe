<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

Route::get('/', [CampaignController::class, 'index']);

Route::resource('campaign', CampaignController::class);