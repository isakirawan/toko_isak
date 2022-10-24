<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LatihanController;
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

Route::get('/home', function () {
    return view('homepage.index');
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/beranda', [LatihanController::class, 'beranda']);

