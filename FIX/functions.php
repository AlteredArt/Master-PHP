<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

    <?php 
        function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHi("Waffles", 12);
        sayHi("Chloe", 5);
    ?>

    <?php 
        function cube($num){
            return $num * $num * $num;

        }
        
        $cubeResult = cube(4);
        echo $cubeResult;
    ?>
	
	<?php 
		function is_palindrone ($string){
			$string = str_replace('','', strtolower($string));
			return ($string == strrev($string));
		}
	
	$check_string = 'Race Car';
	if( is_palindrone($check_string)) {
		echo "<p>$check_string is a palindrone</p>";
	}
	?>
    
</body>
</html>