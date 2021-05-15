<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public  function contact(){
        return view('pdf.contact');
    }
    public function email(Request $request){
        $details=[
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'message'=>$request->message,
        ];
        Mail::to('abduvohid.mirzamahmudov@gmail.com')->send(new ContactMail($details));
        return back()->with('email','Email muvaffaqiyatli jo\'natildi');
    }
}
