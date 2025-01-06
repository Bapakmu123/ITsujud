<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
})->name('index');

Route::get('/showdown', function () {
    return view('showdown');
})->name('showdown');

Route::get('/timer', function () {
    return view('timer');
})->name('timer');