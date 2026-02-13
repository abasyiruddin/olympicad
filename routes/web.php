<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'beranda']);
Route::get('/profil', [FrontController::class, 'profil']);
Route::get('/kontak', [FrontController::class, 'kontak']);
Route::get('/chatbot', [FrontController::class, 'chatbot']);