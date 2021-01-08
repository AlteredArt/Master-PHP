<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php</h1>
   
    <?php
     //strings
        $bosscat = "Waffles";
        $coolcat = "Chloe";
        $coolcatAge = 6;
        echo "<h1>Hello this is $bosscat</h1>";
        echo "<hr>";
        echo "<p>$coolcat is sleeping</p>";
        echo "<p>$coolcat is $coolcatAge years old.</p>";
        echo str_replace("les", "ies", $bosscat);
        echo substr($coolcat, 0, 3);
    ?>

 
    <?php
   //numbers
        $num = 22;
    //explicit whole number / integer
        echo 40;
    //decimal float
        echo 40.6;
    //math
        echo (4+5) * 10;
        echo $num + $num;
        echo $num *= $num;
    //powers
        echo pow(2, 4);
        echo sqrt(122);
    // comparison
        echo max(12, 24);
        echo min (10 , 7)

    ?>
</body>
</html>