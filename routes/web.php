<?php

use App\Http\Controllers\AdminUserResource;
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

Route::get('/detail/{market:slug}', [LayoutController::class, 'detail']);

Route::get('/mypost', [LayoutController::class, 'mypost'])->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/register', [AuthController::class, 'index2'])->middleware('guest');

Route::post('/register', [AuthController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::resource('/news/upload', NewsResource::class)->middleware('auth');

Route::resource('/market/upload', MarketResource::class)->middleware('auth');

Route::resource('/admin/user', AdminUserResource::class)->middleware('auth')->middleware('admin');