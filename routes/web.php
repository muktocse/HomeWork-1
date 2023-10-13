<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home\Homecontroller;


Route::get('/',[Homecontroller::class,'home']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
