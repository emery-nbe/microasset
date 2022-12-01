<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'sexe' => 'required',
            'phone' => 'required|numeric',
            'email' => 'email',
            'password' => 'required|max:8'

        ]);

        $user = User::create(request(['name', 'sexe','phone', 'email','password']));

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
	}
}
