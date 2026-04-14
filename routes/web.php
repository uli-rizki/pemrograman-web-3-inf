<?php

use Illuminate\Support\Facades\Route;

// panggil controller
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function(){
    return view('kontak');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);