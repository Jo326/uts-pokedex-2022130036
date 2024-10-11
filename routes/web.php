<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;


Route::resource('pokemon', PokemonController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
