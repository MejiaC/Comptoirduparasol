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



        function($message)
    {
        $message->from('commercial@comptoirduparasol.fr');
        $message->to('commercial@comptoirduparasol.fr', 'Admin')->subject('Demande de devis en ligne');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
}}