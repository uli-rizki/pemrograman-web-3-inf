<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// panggil class untuk validasi form
use Illuminate\Support\Facades\Validator;

use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::get();

        return response()->json($matakuliah);
    }

    public function store(Request $request)
    {
        // validasi form input
        $validator = Validator::make($request->all(), [
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    }
}
