<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function show(){
        return view('auth.login');
    }

    public function store(){
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('error', 'les données entrées sont incorrectes');
        }

        return redirect()->to('/');
	}
}
