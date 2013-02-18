<?php

/**
 * About/Index
 */
Route::get('/', array('as' => 'home', function()
{
	// Announcements
	$announcements = array(
		array(
			'start'		=> Carbon\Carbon::create(2013, 1, 4, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 2, 4, 0, 0, 0),
			'image'		=> 'img/powertrain.png',
			'link'		=> 'http://powertrainsports.com',
			'title'		=> "Brian Jacobs and Power Train Sports Rochester",
			'content'	=> "<p>The Brian Jacobs Golf Academy is proud to introduce <a href='http://www.powertrainsports.com/' target='_blank'>Power Train Sports Rochester</a> as our official Strength and Conditioning Program. Brian Jacobs' legacy within the golf community paired with the strength and conditioning knowledge of Power Train Sports is an elite tandem for adults and juniors looking to take their golf game to the next level.</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 2, 4, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 3, 4, 0, 0, 0),
			'image'		=> 'img/eyeline.png',
			'link'		=> 'http://www.eyelinegolf.com/',
			'title'		=> "Brian Jacobs and Eyeline Golf",
			'content'	=> "<p><a href='http://www.eyelinegolf.com/' target='_blank'>Eyeline Golf</a> has joined Brian Jacobs Golf as the official provider to the Brian Jacobs Golf Academy of short game training aids. Since 2002, Eyeline Golf products have been helping golfers unlock their potential in addition have been the #1 Training aid company on the Pro Tours (247 Tour Players chose EyeLine in 2011 - PGA, LPGA, Nationwide). Let Brian Jacobs Golf Academy and Eyeline Golf unlock <em>your</em> potential and take your game inside the ropes!</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 5, 1, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 6, 1, 0, 0, 0),
			'title'		=> "Brian Jacobs Golf Welcomes Apprentice Instructor",
			'content'	=> "<p>Brian Jacobs Golf is pleased to announce the arrival of Nick DiDuro as an apprentice instructor over the cource of the summer. Nick is currently a student in the Professional Golf Management program at Coastal Carolina. Nick's full bio is available on the <a href='".URL::to_route('staff')."'>staff page</a>.</p>"),
	);

	return View::make('pages.about.index')
		->with('now', Carbon\Carbon::now())
		->with('announcements', $announcements);
}));

/**
 * About/Brian
 */
Route::get('/about/brian', array('as' => 'about', function($num = 1)
{
	return View::make('pages.about.brian');
}));

/**
 * About/Staff
 */
Route::get('/about/staff', array('as' => 'staff', function($num = 1)
{
	return View::make('pages.about.staff');
}));

/**
 * About/Relationships
 */
Route::get('/about/relationships', array('as' => 'relationships', function($num = 1)
{
	return View::make('pages.about.relationships');
}));

/**
 * About/Testimonials
 */
Route::get('/about/testimonials', array('as' => 'testimonials', function($num = 1)
{
	return View::make('pages.about.testimonials');
}));