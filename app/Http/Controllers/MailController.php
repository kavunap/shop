<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Sub;

class MailController extends Controller
{
    public function newMail(){
        return view('emails.new_mail');
    }
    public function sendEmail(Request $request){
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
        ]);
        
        $details =[
            'title' => $request->subject,
            'body' => $request->body
        ];
        $subs = Sub::all();
        foreach( $subs as $sub){
            Mail::to($sub->sender_email)->send(new TestMail($details));
        }
        return redirect()->route('home')
                        ->with('success','Email sent successfully.');
    }
}
