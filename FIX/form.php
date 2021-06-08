<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    
<form action="form.php" method="post">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
 
    Number 1: <input type="checkbox" name='favnum[]' value="1"><br>
    Number 2: <input type="checkbox" name='favnum[]' value="2"><br>
    Number 3: <input type="checkbox" name='favnum[]' value="3"><br>
    <input type="submit">
</form>

<br>
You're name is: <?php echo $_GET["name"]?>
<br>
You're age is: <?php echo $_GET["age"]?>
<br>

<?php 
    $favnum = $_POST["favnum"];
    echo $favnum;

?>

</body>
</html>