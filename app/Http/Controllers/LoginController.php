<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{    public function showLoginForm()
    {
        return view('auth.login');
    }

   /* public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
        }
    }
        */
        public function login(Request $request)
{
    return redirect()->route('home');
}
}
