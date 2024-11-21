<?php

use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [GreetController::class, 'greet']);

Route::view('/hello', 'greet');