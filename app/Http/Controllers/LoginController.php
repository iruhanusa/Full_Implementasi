<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('profile');
        }

        // Authentication failed
        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    // Handle the logout request
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
