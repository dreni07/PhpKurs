<?php
$user = 'root';
$pass = '';
$host = 'mysql:host=localhost;dbname=kurs';

try{
    $pdo = new PDO($host,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die('Failed Because Of ' . $e->getMessage());
}

?>