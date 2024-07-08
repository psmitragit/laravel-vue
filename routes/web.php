<?php

use App\Http\Controllers\App;
use Illuminate\Support\Facades\Route;


Route::prefix('api')->group(function () {
    Route::get('users', [App::class, 'getUsers']);
    Route::post('register', [App::class, 'register']);
});

Route::get('{view}', [App::class, 'index'])->where('view', '(.*)');
