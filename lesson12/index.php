<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method='post'>
        <label for="">Username:</label><br>
        <input type="text" name='username' id='username'><br>

        <label for="">Surname:</label><br>
        <input type="text" name='surname' id='username'><br>


        <label for="">Password:</label><br>
        <input type="text" name='password' id='username'><br>

        <input type="submit" name='submit'>
    </form>

    <a href="dashboard.php">Dashboard</a>
</body>
</html>