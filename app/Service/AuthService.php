<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;

class AuthService{
    public function login(string $username, string $password){
        $credentials = [
            'username' => $username,
            'password' => $password
        ];

        if(!Auth::attempt($credentials)){
            return [
                'success' => 'false',
                'message' => 'Login gagal, username atau password salah.'
            ];
        }

        request()->session()->regenerate();

        return [
            'success' => 'true',
            'message' => 'Login berhasil!'
        ];
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return [
            'success' => 'true',
            'message' => 'Logout berhasil!'
        ];
    }
}