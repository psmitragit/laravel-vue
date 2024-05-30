<?php

use App\Http\Controllers\App;
use Illuminate\Support\Facades\Route;

Route::get('api/users', [App::class, 'getUsers']);
Route::get('{view}', [App::class, 'index'])->where('view', '(.*)');
