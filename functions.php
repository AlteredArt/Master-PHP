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
    
</body>
</html>