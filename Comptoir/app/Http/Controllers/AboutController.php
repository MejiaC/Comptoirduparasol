<?php

namespace App\Http\Controllers;

use  App\Http\Requests\ContactFormRequest;

class AboutController extends Controller {
	public function create()
	{
		return view('contact');
	}
	public function store(ContactFormRequest $request)
{

    \Mail::send('emails.hello', $request->all(),
     $request->get('personnes'),




        function($message)
    {
        $message->from('wj@wjgilmore.com');
        $message->to('comptoirudparasol@gmail.com', 'Admin')->subject('TODOParrot Feedback');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
}}