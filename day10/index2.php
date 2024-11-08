<?php
// CHECKING IF WE GOT THE USER INPUT
if(isset($_GET['name']) && isset($_GET['password'])){

    $the_username = htmlspecialchars($_GET['name']);
    $the_password = htmlspecialchars($_GET['password']);

    // AFTER GETTING THE USER INPUT
    // ECHO THE DATA THE USER PROVIDED
    echo 'The Username Is:' . $the_username . '<br>';

    echo 'The Password Is ' . $the_password;

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='get'>
        <label for="Name">Name:</label>
        <input type="text" name='name' placeholder='Enter Your Name'><br><br>

        <label for="Password">Password:</label>
        <input type="password" name='password' placeholder='Enter Your Password'><br><br>


        <input type="submit" value='Sent Data'>


    </form>
</body>
</html>