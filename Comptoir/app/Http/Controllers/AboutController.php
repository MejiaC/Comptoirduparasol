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

    \Mail::send('emails.hello',
        array(
        	'event_type' => $request-> get('event_type'),
        	'date' => $request->get('date'),
        	'personnes' => $request->get('personnes'),
        	'lieu' =>'lieu',
        	'rayon_km' => $request->get('rayon_km'),
        	'accessoires' => $request->get('accessoires'),
        	'civilite' => $request->get('civilite'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'telephone2' => $request->get('telephone2'),
            'horaires' => $request->get('horaires'),
        ), 

        function($message)
    {
        $message->from('wj@wjgilmore.com');
        $message->to('comptoirudparasol@gmail.com', 'Admin')->subject('TODOParrot Feedback');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
}}