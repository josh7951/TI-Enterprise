<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

         //  Store data in database
        Contact::create($request->all());

         \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('wapseniorproj@gmail.com', 'Admin')->subject('test');
        });
        
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}