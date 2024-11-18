<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $user_id = $_GET['user_id'];

    try{
        include_once('config.php');
        $sql_query = 'DELETE FROM user WHERE id = :id;';
        $preparment = $pdo->prepare($sql_query);
        $preparment->bindParam(':id',$user_id);
        $preparment->execute();

        $row_count = $preparment->rowCount();

        $the_checking = $row_count ? true : false;

        if($the_checking){
            header('Location:./dashboard.php');
        }
    } catch(PDOException $e){
    
    }
}


?>