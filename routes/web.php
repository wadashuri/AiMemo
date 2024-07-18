<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/memo', function () {
        return view('memo');
    })->name('memo');
});
