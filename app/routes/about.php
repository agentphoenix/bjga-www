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
			'title'		=> "Brian Jacobs Golf and Power Train Sports Rochester",
			'content'	=> "<p>Brian Jacobs Golf is proud to introduce <a href='http://www.powertrainsports.com/' target='_blank'>Power Train Sports Rochester</a> as our official Strength and Conditioning Program. Brian Jacobs' legacy within the golf community paired with the strength and conditioning knowledge of Power Train Sports is an elite tandem for adults and juniors looking to take their golf game to the next level.</p>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 2, 4, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 3, 4, 0, 0, 0),
			'image'		=> 'img/announcements/eyeline.png',
			'link'		=> 'http://www.eyelinegolf.com/',
			'title'		=> "Brian Jacobs Golf and Eyeline Golf",
			'content'	=> "<p><a href='http://www.eyelinegolf.com/' target='_blank'>Eyeline Golf</a> has joined Brian Jacobs Golf as the official provider of short game training aids. Since 2002, Eyeline Golf products have been helping golfers unlock their potential in addition have been the #1 Training aid company on the Pro Tours (247 Tour Players chose EyeLine in 2011 - PGA, LPGA, Nationwide). Let Brian Jacobs Golf and Eyeline Golf unlock <em>your</em> potential and take your game inside the ropes!</p>"),
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
		array(
			'start'		=> Carbon\Carbon::create(2013, 6, 1, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2013, 8, 10, 0, 0, 0),
			'title'		=> "Brian Jacobs Golf PGA Championship Tip",
			'content'	=> "<p>The word is out about Brian Jacobs Golf and people are starting to notice! Brian Jacobs Golf was selected to film a series of swing tips that will air on local television during the PGA Championship week. Check out the video now and book your lessons today with a Brian Jacobs Golf instructor and take your game inside the ropes.</p><div class='btn-group'><a href='http://rochesterhomepage.net/fulltext?nxd_id=393492' target='_blank' class='btn btn-primary'>Check It Out</a><a href='http://www.13wham.com/content/sports/local/story/Brian-Jacobs-Golf-Tips/9dkzVmpqsUe_1c3wwiOVeA.cspx' target='_blank' class='btn btn-primary'>More Tips</a></div>"),
		array(
			'start'		=> Carbon\Carbon::create(2013, 12, 10, 0, 0, 0),
			'end'		=> Carbon\Carbon::create(2014, 2, 1, 0, 0, 0),
			'image'		=> 'img/announcements/trackman.png',
			'link'		=> 'http://trackmangolf.com/',
			'title'		=> "TrackMan Is Coming!",
			'content'	=> "<p>Unlike other new years, 2014 won't just usher in a new year of golf, but new ways to take your game inside the ropes with Brian Jacobs Golf and TrackMan Pro. Combining our intuitive and highly effective personal teaching skills with the industry leading swing analysis tool, Brian Jacobs Golf will give golfers a whole new perspective on their golf swing and new ways to form good swing habits that will lead to better scores year round. Stay tuned for more details in the new year!</p>"),
	);

	return View::make('pages.about.index')
		->with('now', Carbon\Carbon::now())
		->with('announcements', $announcements);
}));

Route::post('/', function()
{
	// Build the BombBomb service
	$b = new BombBombService;

	// Get all the contacts for the list
	$contacts = $b->getListContacts('8334abc4-dd51-dbec-233f-517b664913f3');

	// Create an array for storing the info
	$emails = array();

	foreach ($contacts['info'] as $key => $person)
	{
		$emails[] = $person['email'];
	}

	// Create a new object for the flash info
	$flash = new stdClass;

	// Set the flash info
	$flash->status = 'warning';
	$flash->message = "You are already subscribed for the newsletter. Thank you!";

	// If the person isn't in the list, add them
	if ( ! in_array(Input::get('email'), $emails))
	{
		$b->addContact(array(
			'eml'		=> Input::get('email'),
			'listlist'	=> '8334abc4-dd51-dbec-233f-517b664913f3',
		));

		// Set the flash info
		$flash->status = 'success';
		$flash->message = "You've been subscribed for the newsletter. Thank you!";
	}

	return View::make('pages.about.index')
		->with('now', Carbon\Carbon::now())
		->with('announcements', array())
		->with('flash', $flash);
});

Route::get('test', function()
{
	$b = new BombBombService;

	$contacts = $b->getListContacts('8334abc4-dd51-dbec-233f-517b664913f3');

	$emails = array();

	foreach ($contacts['info'] as $key => $person)
	{
		$emails[] = $person['email'];
	}

	if ( ! in_array($email, $emails))
	{
		//$b->addContact(array('eml' => $email));
	}

	echo '<pre>';
	//var_dump($b->lists());
	//8334abc4-dd51-dbec-233f-517b664913f3
	//var_dump($b->getListContacts('fd9dee51-c8f6-38d7-b676-927827cdb3d4'));
	var_dump($contacts['info']);
	echo '</pre>';
});

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

/**
 * About/Services
 */
Route::get('/about/services', array('as' => 'services', function()
{
	return View::make('pages.about.services');
}));

/**
 * About/News
 */
Route::get('/about/news', array('as' => 'news', function()
{
	$news = array(
		array(
			'title' => 'Brian Jacobs Golf and Next Level Strength and Conditioning Partnership',
			'date' => Carbon\Carbon::create(2014, 5, 9, 9, 0, 0)->format('l F jS, Y'),
			'summary' => 'Brian Jacobs Golf and Next Level Strength and Conditioning are proud to announce their partnership brining a new level of golf instruction and strength and conditioning programming to the Greater Rochester Area.',
			'content' => Sparkdown\Markdown(file_get_contents(path('app').'/news/next_level.md')),
			'contentTitle' => "Next Level Strength and Conditioning Partnership",
			'contentId' => "nextLevel",
		),
		array(
			'title' => 'Trackman Is Coming!',
			'date' => Carbon\Carbon::create(2014, 1, 1, 12, 0, 0)->format('l F jS, Y'),
			'summary' => "Unlike other new years, 2014 won't just usher in a new year of golf, but new ways to take your game inside the ropes with Brian Jacobs Golf and TrackMan Pro. Combining our intuitive and highly effective personal teaching skills with the industry leading swing analysis tool, Brian Jacobs Golf will give golfers a whole new perspective on their golf swing and new ways to form good swing habits that will lead to better scores year round. Stay tuned for more details in the new year!",
			'content' => "",
		),
		array(
			'title' => 'Brian Jacobs Golf PGA Championship Tip',
			'date' => Carbon\Carbon::create(2013, 6, 3, 9, 0, 0)->format('l F jS, Y'),
			'summary' => "The word is out about Brian Jacobs Golf and people are starting to notice! Brian Jacobs Golf was selected to film a series of swing tips that will air on local television during the PGA Championship week. Keep your eyes peeled for the spots while watching!",
			'content' => "",
		),
		array(
			'title' => 'Brian Jacobs Golf and Eyeline Golf',
			'date' => Carbon\Carbon::create(2013, 2, 4, 9, 0, 0)->format('l F jS, Y'),
			'summary' => "Eyeline Golf has joined Brian Jacobs Golf as the official provider of short game training aids. Since 2002, Eyeline Golf products have been helping golfers unlock their potential in addition have been the #1 Training aid company on the Pro Tours (247 Tour Players chose EyeLine in 2011 - PGA, LPGA, Nationwide). Let Brian Jacobs Golf and Eyeline Golf unlock your potential and take your game inside the ropes!",
			'content' => "",
		),
	);

	return View::make('pages.about.news')
		->with('news', $news);
}));