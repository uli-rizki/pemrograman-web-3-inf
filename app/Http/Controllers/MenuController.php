<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan daftar menu
        $menu = Menu::all();
        return response()->json($menu);
    }

    public function store(Request $request)
    {
        // validasi input
        $validator = Validator::make($request->all(), [
            'nama_menu' => 'required|string|max:255',
            'ukuran' => 'required|in:small,medium,large',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Kode untuk menambahkan menu baru
        $menu = Menu::create($request->all());
        return response()->json($menu, 201);
    }
}
