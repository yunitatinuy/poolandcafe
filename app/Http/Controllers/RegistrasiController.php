<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('/pengguna/registrasi', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) 
    {
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        
        User::create($validateData);

        $request->session()->flash('succes','Registrasion succesfull');
        return redirect('/login');
    }
}