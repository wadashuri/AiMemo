<?php

use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // API ルート
    Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
        Route::get('/memo/index', [MemoController::class, 'memoIndex'])->name('memo.index');
    });

    // ビュー表示用のルート
    Route::get('/memo', function () {
        return view('memo');
    })->name('memo');
});
