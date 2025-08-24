<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
   function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return view("admin.dashboard");
        } else {
            echo "Login Failed. Invalid email or password";
        }
    }
     function registration(Request $request) {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
        ]);
        echo "Registration Successful";
        return redirect('/login');


    }
}