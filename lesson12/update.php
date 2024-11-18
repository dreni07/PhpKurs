<?php
include_once('config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
}


try{
    $sql_query = 'SELECT username,surname FROM user WHERE id = :id;';
    $prepare = $pdo->prepare($sql_query);
    $prepare->bindParam(':id',$user_id);

    $prepare->execute();

    $fetched = $prepare->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e){
    die('Failed Because Of ' . $e->getMessage());
}

$the_data = $fetched;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $get_id = $_GET['user_id'];
    $the_new_username = $_POST['username'];
    $the_new_surname = $_POST['surname'];
    echo $the_new_username;

    try{
        $sql = 'UPDATE user SET username = :username,surname=:surname WHERE id=:id';
        $preparment = $pdo->prepare($sql);
        $preparment->bindParam(':username',$the_new_username);
        $preparment->bindParam(':surname',$the_new_surname);
        $preparment->bindParam(':id',$get_id);
        $preparment->execute();

        $the_row_count = $preparment->rowCount();
        $checking = $the_row_count ? 'Insertion Failed' : false;
        if($checking){
            header('Location:./dashboard.php');
        }
    } catch(PDOException $e){
        die('Failed ' . $e->getMessage());
    }
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
        <input type="text" name='username' value=<?php echo $the_data['username']?>>
        <input type="text" name='surname' value=<?php echo $the_data['surname']?>>
        <input type="submit" name='submit'>
    </form>
</body>
</html>