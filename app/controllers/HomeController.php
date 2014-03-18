<?php

class HomeController extends BaseController {
	public function home() {

		//echo $user = User::find(1)->username;
		
		/*Mail::send('emails.auth.test', array('name' => 'Jason'), function($message){
			$message->to('jasonbishp30@gmail.com', 'Jason Bishop')->subject('Test Email');
		});*/

		return View::make('home');
	}


}