<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([

                'name' => $attrs['name'],
                'email' => $attrs['email'],
                'password' => bcrypt($attrs['password']),
        ]);

        return response([
                'user' => $user,
                'token' => $user->createToken('secret')->plainTextToken
        ],200);
    }

    public function login(Request $request)
    {
        $attrs = $request->validate([           
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(!Auth::attempt($attrs))
        {
            return response([
                'message' => 'Invalid',                
            ],403);
        }

        return response([
                'user' => auth()->user(),
                'token' => auth()->user()->createToken('secret')->plainTextToken
        ],200);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

         return response([
                'message' => 'Success',                
        ],200);
    }

    public function user()
    {
         return response([
                'user' => auth()->user(),                
        ],200);
    }


}
