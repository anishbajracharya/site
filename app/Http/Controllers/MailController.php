<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Mail\SendMailForContactUs;


class MailController extends Controller
{

public function mail(Request $request)
{
    $text = $request->text;
    $email = $request->email;
    $phone = $request->phone_number;

    $emailUsr = 'digitalterai@gmail.com';
    Mail::to($emailUsr)->send(new SendMailable($text,$email,$phone));
    
   
   return redirect('/')->with('success','mail send sucessfully');
   
}
public function sendnewsletter(Request $request)
{
    
    $email = $request->email;

    $emailUsr = 'digitalterai@gmail.com';
    Mail::to($emailUsr)->send(new SendMailable($text='',$email,$phone=''));
    
   
   return redirect('/')->with('success','mail send sucessfully');
   
}


public function mailcontactus(Request $request)
{
    // return $request;
    $text = $request->text;
    $email = $request->email;
    $phone = $request->phone;
    $subject = $request->subject;
    $message1 = $request->message1;

    // $mail_content = [
    //     'text'          => $request->input('text'),
    //     'email'       => $request->input('email'),
    //     'phone'  => $request->input('phone'),
    //     'subject'  => $request->input('subject'),
    //     'message'  => $request->input('message'),
    // ];   
    $emailUsr = 'digitalterai@gmail.com';   
    Mail::to($emailUsr)->send(new SendMailForContactUs($text,$email,$phone,$subject,$message1));
    // Mail::to($email)->send(new SendMailForContactUs($mail_content));
   
    return back()->with('success','mail send sucessfully');

      
    
   
}
}
