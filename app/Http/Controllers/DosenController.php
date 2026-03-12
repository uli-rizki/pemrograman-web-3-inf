<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = [
            'nidn' => "0209119302",
            'nama_lengkap' => "Uli Rizki"
        ];

        return response()->json($dosen);
    }
}
