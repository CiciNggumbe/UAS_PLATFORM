<?php

use Illuminate\Support\Facades\Route;

// ================= WELCOME ================= //
Route::get('/', function () {
    return view('welcome');
});
