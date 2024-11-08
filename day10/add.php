<?php

include_once('db.inc.php');


// check if the form is submitet
function checkIfEmailExists($email){
    require 'db.inc.php';
    $sql = 'SELECT * FROM userstable WHERE email = :email;';
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(':email',$email);
    $prepare->execute();

    $fetched = $prepare->fetchAll();

    if($fetched){
        return false;
    }else{
        return true;
    }
}
if(isset($_POST['submit'])){
    // get the user input
    // the data that the user sent 
    $the_name = htmlspecialchars($_POST['name']);
    $the_surname = htmlspecialchars($_POST['surname']);
    $the_email = htmlspecialchars($_POST['email']);
    $the_email_value = checkIfEmailExists($the_email);

    if($the_email_value){
        $the_sql_query = 'INSERT INTO userstable (name,surname,email) VALUES (:name,:surname,:email);';
        $the_preparment = $pdo->prepare($the_sql_query);
        $the_preparment->bindParam(':name',$the_name);
        $the_preparment->bindParam(':surname',$the_surname);
        $the_preparment->bindParam(':email',$the_email);

        $the_preparment->execute();
    }else{
        echo 'Email Exists';
    }

    
}

?>