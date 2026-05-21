<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// panggil class model
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();

        return response()->json($mahasiswa);
    }

    // menambhkan fungsi add mahasiswa
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'nim' => 'required|unique:mahasiswa,nim',
            'nama_lengkap' => 'required',
            'kelas' => 'required'
        ], [
            'nim.unique' => 'Nim sudah ada'
        ]);

        // cek jika ada eror validasi form
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        // menyimpan data
        $mahasiswa = new Mahasiswa;
        $mahasiswa->fill($request->all());
        $simpan = $mahasiswa->save();
        /**
         * INSERT INTO mahasiswa (nim, nama_lengkap, kelas) VALUES
         * ('221100', 'Uli', 'C1')  
         */

        if($simpan) {
            return response()->json([
                'status' => 'success'
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'Gagal menyimpan data'
            ], 422);
        }
    }

    // menambhkan fungsi add mahasiswa
    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'kelas' => 'required'
        ], [
            'nim.unique' => 'Nim sudah ada'
        ]);

        // cek jika ada eror validasi form
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        $mahasiswa = Mahasiswa::find($id);
        if(! $mahasiswa) {
             return response()->json([
                'status' => 'error',
                'error' => 'Data mahasiswa tidak ditemukan'
            ], 422);
        }

        // menyimpan data
        $mahasiswa->fill($request->all());
        $simpan = $mahasiswa->save();

        if($simpan) {
            return response()->json([
                'status' => 'success'
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'Gagal menyimpan data'
            ], 422);
        }
    }

    public function destroy(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if(! $mahasiswa) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 422);
        }

        $hapus = $mahasiswa->delete();

        if($hapus) {
            return response()->json([
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'message' => 'Gagal menghapus data'
            ], 422);
        }
    }
}
