<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cliente', [ClientController::class, 'index']);
Route::get('/vendedor', [SellerController::class, 'index']);
Route::get('/vendedor/singup', [SellerController::class, 'singup']);