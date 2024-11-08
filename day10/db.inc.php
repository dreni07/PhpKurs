<?php
$host = 'mysql:host=localhost;dbname=users';
$username = 'root';
$password = '';

try{
    $pdo = new PDO($host,$username,$password);
    echo 'Connection Was Successful';
} catch(PDOException $e){
    die('Failed Because Of ' . $e->getMessage());
}


?>