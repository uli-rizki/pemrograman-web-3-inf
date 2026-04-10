<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/kelas', function(){
    $kelas = [
        'nama_kelas' => "Kelas C1",
        'jumlah_siswa' => 30
    ];

    return response()->json($kelas);
});

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);