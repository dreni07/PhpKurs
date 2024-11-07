<?php
    $host = 'mysql:host=localhost;dbname=db';
    $username = 'root';
    $password = '';

    try{
        $pdo = new PDO($host,$username,$password);
        echo 'The Connection Was Successful';

        $sql = 'CREATE TABLE IF NOT EXISTS singers(
            id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL
        )';

        $pdo->exec($sql);

        echo '<br>';
        echo 'Table Was Created Successfuly';

        $username = 'Dren';
        $email = 'drenllazani10@gmail.com';

        $prepare = $pdo->prepare('INSERT INTO singers (username,email) VALUES (:username,:email)');
        $prepare->bindParam(':username',$username);
        $prepare->bindParam(':email',$email);

        $prepare->execute();

        echo 'Data Added';

    } catch(PDOException $e){
        echo "Failed Because Of " . $e->getMessage();
    }

?>