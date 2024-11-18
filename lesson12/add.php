<?php
include_once("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    try{
        $sql_query = 'INSERT INTO user (username,surname,password) VALUES (:username,:surname,:password);';
        $prepare = $pdo->prepare($sql_query);
        $prepare->bindParam(':username',$username);
        $prepare->bindParam(':surname',$surname);
        $prepare->bindParam(':password',$hashed_password);
        $prepare->execute();

        $the_row_count = $prepare->rowCount();

        if($the_row_count){
            header('Location:./dashboard.php');
        }

    } catch(PDOException $e){
        die('Failed Inserting The Data ' . $e->getMessage());
    }
}




?>