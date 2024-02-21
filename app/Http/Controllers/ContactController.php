<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }


    public function sendMail(Request $request){
        $details = [
            'name' =>$name,
            'email' =>$email,
            'sur_name' =>$location,
            'message' =>$message,
        ];


        Mail::to('edwinogbua@gmail.com')->send(new ContactMail($details));
        return back()->with('success', 'your mail has been sent successfully');

    }
}
