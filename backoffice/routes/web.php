<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\MangaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// in automatico laravel crea tutte le rotte collegandosi a mangacontroller
Route::resource('manga', MangaController::class)
->middleware(['auth', 'verified']);

// in automatico laravel crea tutte le rotte collegandosi a genrecontroller
Route::resource('genre', GenreController::class)
->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
