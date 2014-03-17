<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', array(
	'as' 	=> 'test',
	'uses' 	=> 'TestController@test1'
	)
);