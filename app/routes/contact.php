<?php

/**
 * Contact
 */
Route::get('/contact/(:any?)/(:any?)', array('as' => 'contact', function($topic = 'general', $sub = false)
{
	$contactTitle = ': ';

	$introMessage = "Thank you for your interest in Brian Jacobs Golf! Please feel free to contact us and one of our representatives will get back to you as soon as possible. We look forward to serving you in meeting your golf goals in the very near future.";

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

		case 'regripping':
			$contactTitle.= 'Re-Gripping Services';
			$introMessage = "Brian Jacobs Golf has partnered with PURE Grips to provide you premier grips at great prices. If you'd like to have your clubs re-gripped, let us know using the form below. A representative will be in touch with a quote and to schedule when to do your re-gripping.";
		break;
		
		default:
			$contactTitle = '';
		break;
	}

	return View::make('pages.contact.index')
		->with('topic', $topic)
		->with('sub', $sub)
		->with('contactTitle', $contactTitle)
		->with('introMessage', $introMessage);
}));
Route::post('/contact/(:any?)/(:any?)', function($topic = 'general', $sub = false)
{
	// Start the Messages bundle
	Bundle::start('messages');

	$introMessage = "Thank you for your interest in Brian Jacobs Golf! Please feel free to contact us and one of our representatives will get back to you as soon as possible. We look forward to serving you in meeting your golf goals in the very near future.";

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

		case 'Eyeline':
			$subject = 'Re-Gripping Service Request';
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

		case 'regripping':
			$contactTitle.= 'Re-Gripping Services';
			$introMessage = "Brian Jacobs Golf has partnered with PURE Grips to provide you premier grips at great prices. If you'd like to have your clubs re-gripped, let us know using the form below. A representative will be in touch with a quote and to schedule when to do your re-gripping.";
		break;
		
		default:
			$contactTitle = '';
		break;
	}

	$to = 'bjacobs1@rochester.rr.com';

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

	if ($topic == 'regripping')
	{
		// Add the regripping requirements
		$rules['numberOfClubs'] = 'required';
		$rules['typeOfGrip'] = 'required';
		$rules['phone'] = 'required';

		// Remove the message requirement
		unset($rules['message']);

		// Set who the email is going to
		$to = 'eric@golfwny.com';

		// Change the message
		$message = "<strong>Name:</strong> ".Input::get('name')."\r\n";
		$message = "<strong>Phone Number:</strong> ".Input::get('phone')."\r\n";
		$message.= "<strong>Email Address:</strong> ".Input::get('emailAddress')."\r\n\r\n";

		$message.= "<strong>Number of Clubs:</strong> ".Input::get('numberOfClubs')."\r\n";
		$message.= "<strong>Type of Grip:</strong> ".Input::get('typeOfGrip')."\r\n";
		$message.= "<strong>Re-Grip Putter:</strong> ".Input::get('includePutter')."\r\n\r\n";

		$message.= "<strong>Special Instructions:</strong> ".Input::get('specialInstructions');
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
		$message = Message::to($to)
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
		->with('contactTitle', $contactTitle)
		->with('introMessage', $introMessage);
});