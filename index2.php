
<!-- \n for a new line -->
<!-- \\ for a backspace -->
<!-- \$ for a dollar sign -->
<!-- \t for tab  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You can have HTML outside PHP</h1>
   
    <?php
        echo '<h1>Variables & Strings</h1>';
    //  Variables & Strings
        $bosscat = "Waffles";
        $coolcat = "Chloe";
        $coolcatAge = 6;
    // Echo with variables
        echo "<h1>Hello this is $bosscat</h1>";
        echo '<h1>Hello this is $bosscat</h1>';
    // Concatenation
        echo '<p>Hello concatenation, ' . $coolcat . '!</p>'; 
    // Escape quotes    
        echo "Hello\'s concatenation, "  . $coolcat . '!'; 
        echo "<hr>";
        echo "<p>$coolcat is sleeping</p>";
        echo "<p>$coolcat is $coolcatAge years old.</p>";
    // Constant Variables (Case Sensitive, Immutable) 
        define('Money', 5);
        echo Money;
    ?>

    <p><?php echo 'outside works'; ?></p>

    <?php
        echo str_replace("les", "ies", $bosscat);
        echo "</br>";
        echo "<p>";
        echo substr($coolcat, 0, 3);
        echo strtoupper("meeeOooww");
        echo "</p>";
        echo strlen($coolcat);
        echo $coolcat[2];
        $coolcat[0] = "c";
        echo $coolcat;
    ?>
 
    <?php
    //numbers
            $num = 22;
        //explicit whole number / integer
            echo 40;
        //decimal float
            echo 40.6;
            echo "</br>";
        //math
            echo (4+5) * 10;
            echo "</br>";
            echo $num + $num;
            echo "</br>";
            echo $num *= $num;
            echo "</br>";
        //powers
            echo pow(2, 4);
            echo "</br>";
            echo sqrt(122);
            echo "</br>";
        // comparison
            echo max(12, 24);
            echo "</br>";
            echo min(10 , 7);
            echo "</br>";
            // echo "hello" + round(3.7);
        ?>
        <br>

    

    <!-- Comparison Operators -->
    <?php
        $a = 9 > 5;
        $b = 10 != 10;
        $c = $a && $b;
        $d = $a || $b;
        $e = $b && $c;
        $f = $a || $d;

        $logic = array($a, $b, $c, $d, $e, $f);
        echo '<pre>';
        var_dump($logic);
        echo '</pre>';

        $c = $a and $b;
        var_dump($c);

        // ^ XOR (evaluates to the opposite)checkout

    ?>

    <!-- // error reporting -->
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!-- // error reporting end -->
 


</body>
</html>