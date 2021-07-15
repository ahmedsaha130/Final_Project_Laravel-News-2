<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactControllerFront extends Controller
{
   public function store( Request $request , Contact $contact)
   {

    $request->validate([
        'name'=>'required',
        'email'=>'required|string|email',
        'subject'=>'required',
        'message'=>'required',

       ]);

       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->subject = $request->subject;
       $contact->message = $request->message;

       $contact->save();
       return redirect()->back()->with('success',' the Message has been Send !');

   }
}
