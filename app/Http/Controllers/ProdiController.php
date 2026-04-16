<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::get();

        return response()->json($prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'singkatan' => 'required'
        ]);

        // cek jika ada eror validasi form
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        // menyimpan data
        $prodi = new Prodi;
        $prodi->fill($request->all());
        $simpan = $prodi->save();

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'singkatan' => 'required'
        ]);

        // cek jika ada eror validasi form
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        // cari data berdasarkan id
        $prodi = Prodi::find($id);

        // jika data tidak ditemukan
        if(! $prodi) {
            return response()->json([
                'status' => 'error',
                'error' => 'Data tidak ditemukan'
            ], 422);
        }

        // update data
        $prodi->fill($request->all());
        $simpan = $prodi->save();

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
