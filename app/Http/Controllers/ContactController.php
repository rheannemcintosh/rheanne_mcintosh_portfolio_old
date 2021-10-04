<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function storeContactMessage(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message_content' => 'required',
        ]);

        $input = $request->all();

        ContactMessage::create($input);

        //  Send mail to admin
        \Mail::send('contact/contact-message-email', array(
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message_content' => $input['message_content'],
            'ctype' => $input['ctype'] ?? null,
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('rheannemcintosh@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
