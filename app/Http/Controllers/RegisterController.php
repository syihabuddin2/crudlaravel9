<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Register',
            'oppopath' => 'assets/oppologo.png'
        ]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:5|max:13|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/')->with('success', 'Registration Success');
    }
}
