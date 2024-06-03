<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function signup(Request $request) {

        $validated_user_input = $request->validate([
            'username' => 'required | min:3 | unique:users',
            'email' => 'required',
            'password' => 'required | min:8',
        ]);

        $user_input = $request->only('username', 'email', 'password');

        User::create($user_input);
        return redirect()->route('login')->with('status', 'Successfully registered');
        }
}
