<?php

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