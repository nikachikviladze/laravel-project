<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Mail;

class ContactController extends Controller
{
    public function get_message(Request $request )
    {      

      $this->validate($request, [
    		'name'=>'required|min:3',
    		'email'=>'required|email',
    		'body'=>'required|min:10'
    	]);

      $data = [
    		'email'=>$request->email,
    		'name'=>$request->name,
    		'subject'=>$request->subject,
    		'bodyMessage'=>$request->body];

    	Mail::send('emails.contact', $data, function ($message) use ($data){
    	    $message->from($data['email']);
    	    $message->to('test@gmail.com', 'User');

    	    $message->subject($data['subject']);
    	});

    
    	return redirect()->back()->with('success', 'თქვენი შეტყობინება წარმატებით გაიგზანა');
    }
}
