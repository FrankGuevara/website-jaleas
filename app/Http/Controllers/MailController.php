<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Mail\ContactEmail;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(EmailRequest $request) {
        $name=$request->name;
        $email=$request->email;
        $message=$request->message; 
        $mail_default = env('MAIL_USERNAME', 'josefrankangelj33@outlook.com');
        Mail::to('svjaleasdelpino@gmail.com')->send(new ContactEmail(
            [
                'name'=>$name,
                'email'=>$email,
                'message'=>$message,
                'date'=>(new DateTime())->format('Y-m-d H:i:s')
            ]
        ));
        session()->flash('success', 'Nos pondremos en contacto contigo.');
        return redirect()->route('contact');
    }
}
