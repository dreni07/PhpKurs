<?php

function userLogIn(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        try{
            require 'config.php';

            $the_sql_query = 'SELECT * FROM userstable WHERE username = :username;';

            $the_preparment = $pdo->prepare($the_sql_query);
            $the_preparment->bindParam(':username',$username);

            $the_preparment->execute();

            $the_fetched_ = $the_preparment->fetch(PDO::FETCH_ASSOC);

            if($the_fetched_){
                $the_password = $the_fetched_['password'];

                $verify_password = password_verify($password,$the_password);

                if($verify_password){
                    require 'sessions.inc.php';

                    $_SESSION['userId'] = $the_fetched_['id'];
                    header('Location:dashboard.php');
                }else{
                    die('Incorrect Password!');
                }
            }else{
                die('Username Does Not Exist');
            }


            
        } catch(PDOException $e){
            die('Failed Because Of ' . $e->getMessage());
        }
    }
}

userLogIn();

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


    </form>
</body>
</html>