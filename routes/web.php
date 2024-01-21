<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaLengkapController;

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
Route::get('/create-nama-lengkap', [NamaLengkapController::class, 'create-nama-lengkap']);
Route::post('/store-nama-lengkap', [NamaLengkapController::class, 'store'])->name('store.nama-lengkap');
Route::get('/show-data', [NamaLengkapController::class, 'showData'])->name('create.nama-lengkap');
Route::get('/', function () {
    return view('welcome');
});
