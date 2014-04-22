<?php

/**
 * Instruction/Index
 */
Route::get('/instruction/index', array('as' => 'instruction', function()
{
	return View::make('pages.instruction.philosophy');
}));

/**
 * Instruction/Private
 */
Route::get('/instruction/private', array('as' => 'private', function()
{
	// Get the current time
	$now = Carbon\Carbon::now();

	// Start of winter instruction
	$start = Carbon\Carbon::create(2013, 11, 1, 0, 0, 0);

	// End of winter instruction
	$end = Carbon\Carbon::create(2014, 4, 30, 0, 0, 0);

	// Set the proper view based on today's date
	$view = ($now->gte($start) and $now->lt($end)) 
		? 'pages.instruction.offseason' 
		: 'pages.instruction.private';

	return View::make($view);
}));

/**
 * Instruction/Schools
 */
Route::get('/instruction/schools', array('as' => 'schools', function()
{
	return View::make('pages.instruction.schools');
}));

/**
 * Instruction/Juniors
 */
Route::get('/instruction/juniors', array('as' => 'juniors', function()
{
	$api = new SchedulerService;

	return View::make('pages.instruction.juniors')
		->with('camps', $api->getServicesByName('youth-golf-camp')['data'])
		->with('team', $api->getServicesByName('youth-golf-team')['data'])
		->with('linksters', $api->getServicesByName('linksters')['data']);
}));

/**
 * Instruction/JuniorTeam
 */
Route::get('/instruction/junior-team', array('as' => 'juniorteam', function()
{
	return View::make('pages.instruction.juniorteam');
}));

/**
 * Instruction/JuniorElite
 */
Route::get('/instruction/junior-elite', array('as' => 'juniorelite', function()
{
	return View::make('pages.instruction.juniorelite');
}));

/**
 * Instruction/JuniorCamp
 */
Route::get('/instruction/junior-camps', array('as' => 'juniorcamps', function()
{
	return View::make('pages.instruction.juniorcamp');
}));

/**
 * Instruction/Linksters
 */
Route::get('/instruction/linksters', array('as' => 'linksters', function()
{
	return View::make('pages.instruction.linksters');
}));

/**
 * Instruction/JuniorAcademy
 */
Route::get('/instruction/junior-academy', array('as' => 'junioracademy', function()
{
	return View::make('pages.instruction.junioracademy');
}));

/**
 * Instruction/Clinics
 */
Route::get('/instruction/clinics', array('as' => 'clinics', function()
{
	return View::make('pages.instruction.clinics');
}));

Route::get('/instruction/booking', array('as' => 'booking', function()
{
	return View::make('pages.instruction.scheduler');
}));

/**
 * Instruction/Booking
 */
/*Route::get('/instruction/booking/(:any?)/(:any?)', array('as' => 'booking', function($type = false, $id = false)
{
	return View::make('pages.instruction.no_instruction');

	switch ($type)
	{
		case 'event':
			$link = '?View=EventDetails&eventoccurrenceid='.$id;
		break;
		
		default:
			$link = '?View=bookapt';
		break;
	}

	return View::make('pages.instruction.booking')
		->with('link', $link);
}));*/

Route::get('/instruction/offseason', array('as' => 'offseason', function()
{
	return View::make('pages.instruction.offseason');
}));