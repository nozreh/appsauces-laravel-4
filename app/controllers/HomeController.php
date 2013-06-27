<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home.index');
	}
	
	public function sendEmail()
	{
		$result = array();
		$data = array();
		// Declare the rules for the form validation
		$rules = array(
			'name'        => 'required',
			'email'       => 'required|email',
			'message'     => 'required',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll return false ofcourse.
		if ($validator->fails())
		{
			$result['success'] = FALSE;
		}
		else
		{
			$data['name'] = Input::get('name');
			$data['email'] = Input::get('email');
			$data['message'] = Input::get('message');
			
			//Send email using SwiftMailer
			Mail::send('emails.welcome-mail', $data, function($mailer) use ($data)
			{
				$mailer->to($data['email'], $data['name']);
				$mailer->subject('Welcome to Appsauces' . $data['name']);
			});
			
			$result['success'] = TRUE;
		}
		
		
		return Response::json($result);
	}

}