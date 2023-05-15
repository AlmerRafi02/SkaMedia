<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\MarketResource;
use App\Http\Controllers\NewsResource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LayoutController::class, 'home']);

Route::get('/market', [LayoutController::class, 'market']);

Route::get('/detail', [LayoutController::class, 'detail']);

Route::get('/mypost', [LayoutController::class, 'mypost']);

Route::get('/login', [AuthController::class, 'index']);

Route::get('/register', [AuthController::class, 'index2']);

Route::resource('/news/upload', NewsResource::class);

Route::resource('/market/upload', MarketResource::class);