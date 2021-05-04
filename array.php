<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
</head>
<body>

    <form action="array.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

<?php 
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades[$_POST["student"]];
?>

<?php 
    
?>

<!-- arrays -->
    <!-- Indexable Arrays (numbered keys) -->
    <?php 
        $colors = array('red', 'blue', 'green');
        // print array
        print_r($colors);
        // echo single index
        echo '<p>' . $colors[1] . '</p>';
        // Add to array
        $colors[] = 'yellow';
    ?>
    <!-- second example -->
    <?php 
        $friends = array("Waffles", "Chloe", "Tom", "Elliot");
        $friends[3] = "Daisy";
        $friends[4] = "Comanche";
        echo $friends[3];
        // echo $friends;
        echo count($friends); 
    ?>

    <!-- Associative Arrays (strings as keys, key-value pair) -->
    <?php 
        $home_towns = array (
            "joe" => "Middletown, NY",
            "ashley" => "Austin, TX",
            "tim" => "Los Angelos, CA",
        );
        echo '<pre>';
        print_r($home_towns);
        echo '</pre>';

        echo '<p>' . $home_towns['joe'] . '</p>';
    ?>

    <!-- Multi dimensional array -->
    <?php
     $cats = array (
         "Waffles" => array(
             'age' => 34,
             'sleepy' => 'always',
             'hungry' => 'always',
         ),
         'Chloe' => array(
             'age' => 12,
             'sleepy' => 'sometimes',
             'hungry' => 'sometimes',
         ),
        );

        echo '<pre>';
        print_r($cats);
        echo '</pre>';
        echo '<p>' . $cats['Waffles']['sleepy'] . '</p>';
    ?>
    
</body>
</html>