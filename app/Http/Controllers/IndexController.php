<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function sendMessage(Request $request){
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('succes', 'Votre message a été envoyé avec succès, nous vous contacterons dès que possible');
    }
}
