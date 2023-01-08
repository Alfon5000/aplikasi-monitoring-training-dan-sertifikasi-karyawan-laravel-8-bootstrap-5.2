<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profilAdmin()
    {
        $user = User::find(auth()->user()->id);
        return view('admin.profil', ['user' => $user]);
    }

    public function profilKaryawan()
    {
        $user = User::find(auth()->user()->id);
        return view('profil', ['user' => $user]);
    }
}
