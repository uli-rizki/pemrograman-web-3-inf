<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('prodi')
                ->get();  // eloquent 

        return response()->json($mahasiswa);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'prodi_id' => 'required'
        ]);

        // cek error validasi form
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $mahasiswa = new Mahasiswa;
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
}
