<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});