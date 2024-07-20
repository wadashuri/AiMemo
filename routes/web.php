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
    Route::group(['prefix' => 'api', 'as' => 'api.', 'controller' => MemoController::class], function () {
        Route::get('/memo/index', 'index')->name('memo.index');
        Route::post('/memo/store', 'store')->name('memo.store');
    });

    // ビュー表示用のルート
    Route::get('/memo', function () {
        return view('memo.show');
    })->name('memo');
});
