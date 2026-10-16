<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\sautController;

Route::get('/', [sautController::class, 'main']);

Route::get('/cater', [sautController::class, 'main']);

