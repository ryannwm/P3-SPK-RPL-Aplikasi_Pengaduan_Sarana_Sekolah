<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
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

        $result = $this->authService->login($credentials['username'], $credentials['password']);
        if(!$result['success']){
            return back()->with('error', $result['message']);
        }

        return back()->with('success', $result['message']);
    }

    public function logout(){
        $result = $this->authService->logout();
        return back()->with('success', $result['message']);
    }
}
