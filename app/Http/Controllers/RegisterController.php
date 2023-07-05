<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5' ,'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5' ,'max:255']
        ]);

        $validated['password'] = hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Registrasi Berhasil');

    }
}
