<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
</head>
<body>
    <form action="madlibs.php" method="get">
        Color: <input type="text" name="color"><br>
        Noun: <input type="text" name="noun"><br>
        Kitty: <input type="text" name="kitty"><br>

        <input type="submit">

    </form>
    <br><br>


    <?php 
    $color = $_GET["color"];
    $noun = $_GET["noun"];
    $kitty = $_GET["kitty"];
        echo "Roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I love $kitty <br>";
    ?>
</body>
</html>