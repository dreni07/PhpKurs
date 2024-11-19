<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    try{
        $sql_query = 'INSERT INTO user (username,surname,password) VALUES (:username,:surname,:password);';
        $the_preparment = $pdo->prepare($sql_query);

        $the_preparment->bindParam(':username',$username);

        $the_preparment->bindParam(':surname',$surname);

        $the_preparment->bindParam(':password',$password);

        $the_preparment->execute();

        $the_row_count = $the_preparment->rowCount();

        if($the_row_count){
            header('Location:./dashboard.php');
        }

    } catch(PDOException $e){
        die('Failed Inserting Data ' . $e->getMessage());

    }
}

?>