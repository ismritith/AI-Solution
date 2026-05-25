<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/insights', [PageController::class, 'insights']);
Route::get('/events', [PageController::class, 'events']);
