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

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'Karyawan') {
                return redirect()->intended('/')->with('login', 'Selamat Datang, ' . auth()->user()->nama . '!');
            } else {
                return redirect()->intended('/admin')->with('login', 'Selamat Datang, ' . auth()->user()->nama . '!');
            }
        }

        return back()->with('gagal', 'Email atau Password Salah!');
    }
}
