<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > input{
            margin-bottom:10px;
            font-size:20px;
            padding:5px;
        }

        button{
            background:none;
            border:1px solid black;
            padding:10px 40px;
            font-size:20px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <form action="add.php" method='post'>
        <input type="text" name='username' placeholder='username'><br>
        <input type="text" name='surname' placeholder='surname'><br>
        <input type="password" name='password' placeholder='password'><br>

        <button type="submit" name='submit'>Sign Up</button>

    </form>
</body>
</html>