<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request )
    {
        $data = $this->validate( $request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|unique:users',
            'password_confirmation' => 'required|same:password',
            'password' => [
                'required',
                'confirmed',
                 Password::min(6)->numbers(),
            ],
            // 'role' => 'required|in:ADMIN,STAFF',
        ]);

        $user = User::create([
            // 'name' => $data['firstname'] . ' ' . $data['lastname'],
            'fname' => $data['firstname'],
            'lname' => $data['lastname'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            // 'role' => $data['role'],
        ]);

        $token = $user->createToken('authToken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'username' => 'required|string|exists:users',
            'password' => 'required|string',
        ]);

        if(!Auth::attempt( $credentials)){
            return response(['error' => 'The provided credentials are incorrect.'], 422);
        }

        $user = Auth::user();
        $token = $user->createToken('authToken')->plainTextToken;
        
        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();
            return response(
                ['success' => true]);
    }

}

