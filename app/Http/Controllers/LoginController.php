<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function validation(Request $request)
    {
        $validatedData = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('login', 'Selamat Datang!');
        }

        return redirect('/login')->with('gagal', 'Email atau Password Salah!');
    }
}
