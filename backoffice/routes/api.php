<?php

use App\Http\Controllers\Api\MangaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('manga', [MangaController::class, 'index']);

Route::get('manga/{manga}', [MangaController::class, 'show']);
