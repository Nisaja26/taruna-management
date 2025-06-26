<?php

use App\Http\Controllers\TarunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('dashboard');

Route::get('/taruna', [TarunaController::class, 'index'])->name('taruna');
Route::get('/taruna/add', [TarunaController::class, 'create'])->name('taruna.add');
Route::post('/taruna/add', [TarunaController::class, 'store'])->name('taruna.store');
