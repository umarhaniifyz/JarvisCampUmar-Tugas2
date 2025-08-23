<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/profile', function () {
    return response()->json([
        "nama" => "Umar Hanif Wasyadat",
        "nama_panggilan" => "Umar Hanif",
        "hobi" => "mancing",
        "cita_cita" => "membuat usaha pemancingan"
    ]);
});

