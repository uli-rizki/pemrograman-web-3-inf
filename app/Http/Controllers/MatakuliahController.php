<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = [
            [
                'kode_mk' => 'INF001',
                'nama_mk' => 'Pemrograman Web',
                'sks' => 3
            ],
            [
                'kode_mk' => 'INF002',
                'nama_mk' => 'Desain Grafis',
                'sks' => 3
            ]
        ];

        return response()->json($matakuliah);
    }
}
