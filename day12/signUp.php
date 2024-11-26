<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    if(empty($username) || empty($email) || empty($password)){
        die('Please Fill Out All The Data!');
    }

    try{
        $does_user_exists = doesUsernameExists($username);
        
        require 'config.php';
        if($does_user_exists){
            // header('refresh:3;url=signup.php'); WHAT THE REFRESH DOES IT ACTUALLY REFRESHES THE INPUT WE WANT
            // FIRST IT SENTS TO THE PAGE OF SIGNUP.PHP AND AFTER THAT IT REFRESHES THE VALUE OF THE USERNAME LIKE IT CLEARS WHAT WE ALREDY HAVE 
            // WRITTEN THERE
            die('User Alredy Exists');
        }

        $the_sql_query = 'INSERT INTO userstable (username,email,password) VALUES (:username,:email,:password);';
        $the_preparment = $pdo->prepare($the_sql_query);

        
        $the_preparment->bindParam(':username',$username);
        $the_preparment->bindParam(':email',$email);
        $the_preparment->bindParam(':password',$hashed_password);

        $the_preparment->execute();

        $count_of_row = $the_preparment->rowCount();

        if($count_of_row){
            header('Location:logIn.php');
        }
    } catch(PDOException $e){
        die('Failed Because Of ' . $e->getMessage());
    }
}

function doesUsernameExists($username){
    try{
        require 'config.php';
        $the_sql_query = 'SELECT * FROM userstable WHERE username = :username;';
        $the_preparment = $pdo->prepare($the_sql_query);
        $the_preparment->bindParam(':username',$username);
        $the_preparment->execute();

        $the_row_count = $the_preparment->fetch(PDO::FETCH_ASSOC);

        if($the_row_count){
            return true;
        }

    } catch(PDOException $e){
        die('fAILED ' . $e->getMessage());
    }

    return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <input type="text" name='username' placeholder='Username'>
        <input type="email" name='email' placeholder='Email'>
        <input type="password" name='password' placeholder='Password'>
        <input type="submit" name='submit'>
    </form>
</body>
</html>