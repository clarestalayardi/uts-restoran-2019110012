<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimonyController;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('home', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/menu', MenuController::class)->name('menu');
Route::get('/testimony', TestimonyController::class)->name('testimony');
