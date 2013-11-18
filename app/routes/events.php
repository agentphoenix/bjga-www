<?php

use Carbon\Carbon;

/**
 * Event/Amelia-Island
 */
Route::get('/event/amelia-island-2014', array('as' => 'event-amelia-island-2014', function()
{
	return View::make('pages.events.amelia-island-2014');
}));

/**
 * Event/Amelia-Island
 */
Route::get('/event/amelia-island', array('as' => 'event-amelia-island', function()
{
	return View::make('pages.events.amelia-island');
}));

/**
 * Event/Storm-the-Course
 */
Route::get('/event/storm-the-course', array('as' => 'event-storm', function()
{
	return View::make('pages.events.storm-the-course');
}));

/**
 * Event/4-Elements
 */
Route::get('/event/4-elements', array('as' => 'event-elements', function()
{
	return View::make('pages.events.the-four-elements');
}));

/**
 * Event/Special-Instruction
 */
Route::get('/event/special-instruction', array('as' => 'event-special', function()
{
	return View::make('pages.events.special-instruction')
		//->with('now', Carbon::now())
		->with('now', Carbon::now())
		->with('aprilStart', Carbon::createFromDate(2013, 4, 1))
		->with('aprilEnd', Carbon::createFromDate(2013, 4, 31))
		->with('mayStart', Carbon::createFromDate(2013, 5, 1))
		->with('mayEnd', Carbon::createFromDate(2013, 5, 31))
		->with('junStart', Carbon::createFromDate(2013, 6, 1))
		->with('junEnd', Carbon::createFromDate(2013, 6, 30))
		->with('julStart', Carbon::createFromDate(2013, 7, 1))
		->with('julEnd', Carbon::createFromDate(2013, 7, 31))
		->with('augStart', Carbon::createFromDate(2013, 8, 1))
		->with('augEnd', Carbon::createFromDate(2013, 8, 31));
}));

/**
 * Event/Distance-Challenge
 */
Route::get('/event/distance-challenge', array('as' => 'event-distance', function()
{
	return View::make('pages.events.distance-challenge');
}));

/**
 * Event/Putt-For-Dough
 */
Route::get('/event/putt-for-dough', array('as' => 'event-putt', function()
{
	return View::make('pages.events.putt-for-dough');
}));