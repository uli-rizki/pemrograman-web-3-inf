<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil class model
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();

        return response()->json($mahasiswa);
    }
}
