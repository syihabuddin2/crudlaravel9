<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'oppopath' => 'assets/oppologo.png'
        ]);
    }

    public function auth(Request $request)
    {
        $credentials  = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Login success');
        }

        return back()->with('error', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
