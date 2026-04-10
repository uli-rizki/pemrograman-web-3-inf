<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::get();

        return response()->json($matakuliah);
    }
}
