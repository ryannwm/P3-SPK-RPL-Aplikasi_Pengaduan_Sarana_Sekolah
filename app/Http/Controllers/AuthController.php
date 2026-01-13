<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!'
        ]);
        if(!Auth::attempt($credentials)){
            return back()->with('error', 'Username atau password salah');
        }
        request()->session()->regenerate();

        return back()->with('success', 'Login berhasil!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return back()->with('success', 'Logout berhasil!');
    }
}
