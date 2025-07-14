<?php

use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\MangaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('manga', [MangaController::class, 'index']);

Route::get('manga/{manga}', [MangaController::class, 'show']);

Route::get('generi', [GenreController::class, 'index']);
