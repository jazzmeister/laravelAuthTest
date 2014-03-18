<?php
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

// Authenticaated group
Route::group(array('before' => 'auth'), function() {

	//Sign out (GET)
	
	Route::get('/account/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));

});

// Unauthenticated group
Route::group(array('before' => 'guest'), function() {

	// CSRF protection group
	Route::group(array('before' => 'csrf'), function() {
		
		// Create account (POST)
		Route::post('/account/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));	

		// Sign in (POST)
		Route::post('/account/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));
	});

	// Sign in (GET)
	Route::get('/account/sign-in', array(
		'as' => 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
	));

	// Create account (GET)
	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'
	));

});