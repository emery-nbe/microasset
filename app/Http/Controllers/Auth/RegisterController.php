<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }

    public function store(){
        $this->validate(request(), [
            'firstname' =>'required',
            'name' => 'required',
            'phone' => 'required',
            'genre' => 'required',
            'email' => 'email',
            'type_compte' => 'required',
            'password' => 'required|max:8'
        ]);

        $user = User::create(request(['firstname','name', 'phone','genre', 'email', 'type_compte', 'password']));

        auth()->login($user);

        return redirect()->to(route('index'));
	}
}
