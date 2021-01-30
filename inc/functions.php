<?php


// Forces the user to be logged in or redirected. 
function forceLogin() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here
	} else {
		// The user is not allowed
		header("Location: /login.php"); exit;
	}
	//echo $_SESSION['user_id'] . ' is your user id.';
	//exit;
}

function forceDashboard() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here but redirect anyway
		header("Location: /dashboard.php"); exit;
	} else {
		
	}
}

?>