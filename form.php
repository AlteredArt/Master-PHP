<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    
<form action="form.php" method="get">
    Name: <input type="text" name="name">
    <input type="submit">

</form>


You're name is: <?php 
    echo $_GET["name"]
    
    
    ?>
</body>
</html>