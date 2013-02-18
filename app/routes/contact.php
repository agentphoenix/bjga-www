<?php

/**
 * Contact
 */
Route::get('/contact/(:any?)/(:any?)', array('as' => 'contact', function($topic = 'general', $sub = false)
{
	$contactTitle = ': ';

	switch ($topic)
	{
		case 'advocare':
			$contactTitle.= 'AdvoCare';
		break;

		case 'eyeline':
			$contactTitle.= 'Eyeline Golf';
		break;

		case 'schools':
			$contactTitle.= 'Golf Schools';
		break;

		case 'clinics':
			$contactTitle.= 'Golf Clinics';
		break;

		case 'winter-lessons':
			$contactTitle.= 'Winter Instruction';
		break;
		
		default:
			$contactTitle = '';
		break;
	}

	return View::make('pages.contact.index')
		->with('topic', $topic)
		->with('sub', $sub)
		->with('contactTitle', $contactTitle);
}));
Route::post('/contact/(:any?)/(:any?)', function($topic = 'general', $sub = false)
{
	// Start the Messages bundle
	Bundle::start('messages');

	// Set the second part of the subject
	switch (Input::get('subject'))
	{
		case 'Private Instruction':
			$subject = 'Private Instruction Information Request';
		break;

		case 'AdvoCare':
			$subject = 'AdvoCare Information Request';
		break;

		case 'Eyeline':
			$subject = 'EyeLine Golf Information Request';
		break;
		
		default:
			$subject = Input::get('subject');
		break;
	}

	// Set the message
	$message = Input::get('message');

	// Set the contact title
	$contactTitle = ': ';

	switch ($topic)
	{
		case 'advocare':
			$contactTitle.= 'AdvoCare';
		break;

		case 'eyeline':
			$contactTitle.= 'Eyeline Golf';
		break;

		case 'schools':
			$contactTitle.= 'Golf Schools';
		break;

		case 'clinics':
			$contactTitle.= 'Golf Clinics';
		break;

		case 'winter-lessons':
			$contactTitle.= 'Winter Instruction';
		break;
		
		default:
			$contactTitle = '';
		break;
	}

	// Create a new object for the flash info
	$flash = new stdClass;

	// Set the validation rules
	$rules = array(
		'name'			=> 'required',
		'emailAddress'	=> 'email|required',
		'message'		=> 'required'
	);

	if ($topic == 'schools')
	{
		// Add the school requirements
		$rules['schoolAttend'] = 'required';
		$rules['schoolDate'] = 'required';
		$rules['schoolDay'] = 'required';

		// Remove the message requirement
		unset($rules['message']);

		// Change the subject
		$subject = 'Golf Schools Information Request';

		// Change the message
		$message = "<strong>Name:</strong> ".Input::get('name')."\r\n";
		$message.= "<strong>Email Address:</strong> ".Input::get('emailAddress')."\r\n\r\n";

		$message.= "<strong>Golf School:</strong> ".Input::get('schoolAttend')."\r\n";
		$message.= "<strong>Preferred Date:</strong> ".Input::get('schoolDate')."\r\n";
		$message.= "<strong>Preferred Day:</strong> ".Input::get('schoolDay')."\r\n\r\n";

		$message.= "<strong>How did you hear about us</strong>\r\n".Input::get('schoolHearAbout')."\r\n\r\n";
		$message.= "<strong>Additional Comments</strong>\r\n".Input::get('schoolComments');
	}

	if ($topic == 'clinics')
	{
		// Add the school requirements
		$rules['clinicProgram'] = 'required';
		$rules['clinicDate'] = 'required';
		$rules['clinicDay'] = 'required';

		// Remove the message requirement
		unset($rules['message']);

		// Change the subject
		$subject = 'Clinic Program Information Request';

		// Change the message
		$message = "<strong>Name:</strong> ".Input::get('name')."\r\n";
		$message.= "<strong>Email Address:</strong> ".Input::get('emailAddress')."\r\n\r\n";

		$message.= "<strong>Clinic Material:</strong> ".Input::get('clinicProgram')."\r\n";
		$message.= "<strong>Preferred Date:</strong> ".Input::get('clinicDate')."\r\n";
		$message.= "<strong>Preferred Day:</strong> ".Input::get('clinicDay')."\r\n\r\n";

		$message.= "<strong>How did you hear about us</strong>\r\n".Input::get('clinicHearAbout')."\r\n\r\n";
		$message.= "<strong>Additional Comments</strong>\r\n".Input::get('clinicComments');
	}

	if ($topic == 'eyeline')
	{
		// Add the eyeline requirements
		$rules['product'] = 'required';

		// Change the message
		$message = "<strong>Name:</strong> ".Input::get('name')."\r\n";
		$message.= "<strong>Email Address:</strong> ".Input::get('emailAddress')."\r\n\r\n";

		$message.= "<strong>Product:</strong> ".Input::get('product')."\r\n\r\n";

		$message.= "<strong>Message</strong>\r\n".Input::get('message');
	}

	if ($topic == 'winter-lessons')
	{
		// Add the eyeline requirements
		$rules['winterInstructionProgram'] = 'required';

		// Remove the message requirement
		unset($rules['message']);

		// Change the subject
		$subject = 'Winter Private Instruction Booking Request';

		// Change the message
		$message = "<strong>Name:</strong> ".Input::get('name')."\r\n";
		$message.= "<strong>Email Address:</strong> ".Input::get('emailAddress')."\r\n\r\n";

		$message.= "<strong>Package to Book:</strong> ".Input::get('winterInstructionProgram')."\r\n\r\n";

		$message.= "<strong>Comments</strong>\r\n".Input::get('winterInstructionComments');
	}

	// Create a new validator for the contact form
	$validation = Validator::make(Input::all(), $rules);

	// Check the form against the rules
	if ($validation->fails())
	{
		return Redirect::to('contact/'.$topic.'/'.$sub)->with_errors($validation);
	}
	else
	{
		// Send the message
		$message = Message::to('bjacobs1@rochester.rr.com')
			->from(Input::get('emailAddress'), Input::get('name'))
			->subject('[Brian Jacobs Golf] '.$subject)
			->body(nl2br($message))
			->html(true)
			->send();

		// Set the flash info
		$flash->status = ($message->was_sent()) ? 'info' : 'error';
		$flash->message = ($message->was_sent()) ? 'Thank you for your message. Someone will respond to you soon!' : 'There was a problem sending your message. Please try again.';
	}

	return View::make('pages.contact.index')
		->with('flash', $flash)
		->with('topic', $topic)
		->with('sub', $sub)
		->with('contactTitle', $contactTitle);
});