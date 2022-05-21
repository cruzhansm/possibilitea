<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request )
    {
        $data = $this->validate( $request, [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'username' => 'required|unique:users',
            'password' => [
                'required',
                'confirmed',
                 Password::min(8)->mixedCase()->numbers()->symbols(),
            ],
            'role' => 'required|in:ADMIN,STAFF',
        ]);

        $user = User::create([
            'name' => $data['fname'] . ' ' . $data['lname'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);

        $token = $user->createToken('authToken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

}

