<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function showHomepage () {
        return view('welcome');
    }

    public function showAboutMe () {
        return view('aboutMe');
    }

    public function showContacts () {
        return view('contacts');
    }

    public function submitForm(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;


        Mail::to($email)->send(new FormMail);
        return redirect(route('Contacts')/* ->with('status', 'Email-sent!') */);
    }

}
