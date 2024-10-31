<?php
$db_info = 'mysql:host=localhost;dbname=db';
$db_username = 'root';
$db_password = '';

try{
    $pdo = new PDO($db_info,$db_username,$db_password);
    $sql = 'CREATE TABLE IF NOT EXISTS users (
        id INT (6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(150) NOT NULL,
        password varchar(150) NOT NULL
    );';

    $pdo->exec($sql);

    echo 'Table Created';
} catch(Exception $e){
    echo "Error " . $e->getMessage();
}






?>