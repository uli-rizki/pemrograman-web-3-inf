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
        // validasi form input
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)
                    ->first();

        if(! $user) {
            return response()->json([
                'messsage' => 'User belum terdaftar'
            ], 422);
        }

        if ( !Hash::check($request->password, $user->password) ) {
            
            return response()->json([
                'messsage' => 'Password salah'
            ], 422);
        }

        $token = $user->createToken('auth_token')
                    ->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token'   => $token,
        ]);

    }
}
