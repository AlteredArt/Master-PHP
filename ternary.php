<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ternary</title>
</head>

<body>
<!--	Long Hand-->
<!--
	<?php
		$is_logged_in = true;
		if ( $is_logged_in) {
			$message = "welcome Back!";
		} else {
			$message = "Hello There!";
		}
	?>
-->
	
<!--	Short Hand-->
	<?php 
		$is_logged_in = true;
	$name = ' Alice';
		$message = "Welcome" . ($is_logged_in ? " back!" : "!");
		echo $message;
	
//	$name = isset($name) ? $name : " Joe";
//	echo $name;
	$name = $name ?: 'Joe';
	?>
</body>
</html>