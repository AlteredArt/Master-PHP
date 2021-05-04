<?php 

	// Arithmetic
	$x = -10;
	$y = 2;
	// EXPONENTIATION
	 var_dump($x ** $y)


	//  LONG HAND TERNARY
	$is_logged_in = true;
	if ( $is_logged_in) {
		$message = "welcome Back!";
	} else {
		$message = "Hello There!";
	}

	// SHORT HAND TERNARY
	$is_logged_in = true;
	$name = ' Alice';
		$message = "Welcome" . ($is_logged_in ? " back!" : "!");
		echo $message;
	
	//	$name = isset($name) ? $name : " Joe";
	//	echo $name;
	$name = $name ?: 'Joe';


