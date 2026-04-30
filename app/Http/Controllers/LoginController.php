<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi form input
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        // kembalikan pesan error jika ada eror validasi form
        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)
                    ->first();

        // apakah user sudah terdaftar
        if (! $user) {
            return response()->json(['message' => 'User Belum terdaftar'], 422);
        }
        // cek apakah password benar
        if ( !Hash::check(
            $request->password, $user->password)) {
                return response()->json(['message' => 'Password salah'], 422);
        }

        $token = $user->createToken('auth_token')
                    ->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token'   => $token,
        ]);
    }

}
