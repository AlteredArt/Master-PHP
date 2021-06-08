<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLS</title>
</head>
<body>
    <form action="url.php" method="post">
        Name: <input type='text' name="name"><br>
        Age: <input type="number" name="age"><br>
        Password: <input type="password" name='password'><br>
        <input type="submit">
    </form>
    <br><br>


    <?php 
        echo $_POST["name"];
        echo $_POST["age"];
        echo $_POST["password"];
    ?>
</body>
</html>