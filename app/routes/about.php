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
			'image'		=> 'img/announcements/powertrain.png',
			'link'		=> 'http://powertrainsports.com',
			'title'		=> "Brian Jacobs and Power Train Sports Rochester",
			'content'	=> "<p>The Brian Jacobs Golf Academy is proud to introduce <a href='http://www.powertrainsports.com/' target='_blank'>Power Train Sports Rochester</a> as our official Strength and Conditioning Program. Brian Jacobs' legacy within the golf community paired with the strength and conditioning knowledge of Power Train Sports is an elite tandem for adults and juniors looking to take their golf game to the next level.</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 2, 4, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 3, 4, 0, 0, 0),
			'image'		=> 'img/announcements/eyeline.png',
			'link'		=> 'http://www.eyelinegolf.com/',
			'title'		=> "Brian Jacobs and Eyeline Golf",
			'content'	=> "<p><a href='http://www.eyelinegolf.com/' target='_blank'>Eyeline Golf</a> has joined Brian Jacobs Golf as the official provider to the Brian Jacobs Golf Academy of short game training aids. Since 2002, Eyeline Golf products have been helping golfers unlock their potential in addition have been the #1 Training aid company on the Pro Tours (247 Tour Players chose EyeLine in 2011 - PGA, LPGA, Nationwide). Let Brian Jacobs Golf Academy and Eyeline Golf unlock <em>your</em> potential and take your game inside the ropes!</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 5, 1, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 5, 14, 0, 0, 0),
			'title'		=> "Brian Jacobs Golf Welcomes Apprentice Instructor",
			'content'	=> "<p>Brian Jacobs Golf is pleased to announce the arrival of Nick DiDuro as an apprentice instructor over the cource of the summer. Nick is currently a student in the Professional Golf Management program at Coastal Carolina. Nick's full bio is available on the <a href='".URL::to_route('staff')."'>staff page</a>.</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 3, 4, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 4, 1, 0, 0, 0),
			'image'		=> 'img/announcements/puregrips.png',
			'link'		=> 'http://www.puregrips.com/',
			'title'		=> "Brian Jacobs Golf and PURE Grips Help You Weather the Storm",
			'content'	=> "<blockquote>If you play or practice once a week or more you should consider re-gripping your golf clubs a minimum of once a year. New grips can add greater shock absorption, traction and prevent the club from twisting in your hands. Old grips dry out over the course of the golf season and tend to be less shock absorbent. PURE Grips can also add life to your golf clubs and eliminate unnecessary shock or tension in the hands and arms. I highly recommend PURE Grips for any level of player due to their strength, durability and they stay consistently tacky in all types of weather.<small class='primary'>Brian Jacobs</small></blockquote><p>Advantages of using PURE Grips:</p><ul><li>100% rubber formula makes PURE Grips exceedingly durable in all weather conditions</li><li>PURE Grips are guaranteed to remain tacky and supple up to twelve months</li><li>Clubs can be used immediately after install - no dry time due to the use of NO SOLVENTS</li><li>Endorsed by Hank Haney</li></ul><p><strong class='primary'>Storm the Course Special</strong></p><p>From now until April 31st, get your entire set of clubs (up to 13 clubs excluding putter) regripped with PURE Grips for just <strong class='primary'>$99</strong>*. If you only need a few clubs regripped, it's only <strong class='primary'>$9</strong> per grip and only .25 per club to build up tape under the grip. Take advantage of this offer and <strong class='primary'>storm the course</strong> in 2013!</p><p class='muted'><em>* PURE Pro grips in black only</em></p>"),
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

/**
 * About/PUREGrips
 */
Route::get('/about/pure-grips', array('as' => 'puregrips', function()
{
	return View::make('pages.about.puregrips');
}));