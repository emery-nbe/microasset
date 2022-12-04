<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function show(){
        return view('auth.login');
    }

    public function login(){
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('auth-error', 'Les identifiants entrés sont incorrects');
        }

        return redirect()->to(route('index'));
	}

    public function logOut(){
        auth()->logout();
        return redirect()->to(route('index'));
    }
}
