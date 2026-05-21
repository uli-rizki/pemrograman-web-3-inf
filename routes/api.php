<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function(){
    return response()->json(['message' => 'Unauthenticated'], 401);
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::post('/mahasiswa/{id}', [MahasiswaController::class, 'update']);

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

    // Prodi
    Route::get('/prodi', [ProdiController::class, 'index']);
    Route::post('/prodi', [ProdiController::class, 'store']);
    Route::put('/prodi/{id}', [ProdiController::class, 'update']);
    Route::delete('/prodi/{id}', [ProdiController::class, 'destroy']);
});


