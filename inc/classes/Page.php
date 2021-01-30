<?php

//If there is no constant defined called __CONFIG__, do not load this file
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page {
	// Forces the user to be logged in or redirected. 
	static function forceLogin() {
		if(isset($_SESSION['user_id'])) {
			// The user is allowed here
		} else {
			// The user is not allowed
			header("Location: /login.php"); exit;
		}
		//echo $_SESSION['user_id'] . ' is your user id.';
		//exit;
	}

	static function forceDashboard() {
		if(isset($_SESSION['user_id'])) {
			// The user is allowed here but redirect anyway
			header("Location: /dashboard.php"); exit;
		} else {
			
		}
	}
}
?>