<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/correo', [App\Http\Controllers\GeneralController::class, 'correo'])->name('correo');
