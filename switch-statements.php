<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Switch Statements</title>
</head>

<body>
	<?php 
		$total = 10;
		switch ( $total) {
			case 1:
				echo '$total is 1';
				break;
			case 2:
				echo '$total is 2';
				break;
			default:
				echo '$total is more than 2.';
		}
	?>
	
	
	<?php
		$tutrle = 'Leo';
		$bandana = '';
	switch ($turtle) {
		case 'Leo':
			$bandana = 'blue';
			break;
		case 'Raph':
			$bandana = 'red';
			break;
		case 'Mike';
			$bandana = 'Orange';
			break;
		case 'Don':
			$bandana = 'purple';
			break;
			
	};
	
	echo "<p>$bandana</p>";
	
	?>
</body>
</html>