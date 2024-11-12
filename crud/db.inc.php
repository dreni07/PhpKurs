<?php
$host = 'mysql:host=localhost;dbname=db';
$user = 'root';
$password = '';

try{
    $pdo = new PDO($host,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed Because Of " . $e->getMessage();
}

// CHECK IF FORM IS SUBMITET

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // COLLECT DATA FROM FORM
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // insert data to table

    $sql = 'INSERT INTO users (username,email,password) VALUES (:username,:email,:password);';
    $preparing = $pdo->prepare($sql);
    $preparing->bindParam(':username',$username);
    $preparing->bindParam(':email',$email);
    $preparing->bindParam(':password',$password);
    $preparing->execute();
    
}

// SQL query to fetch all the data from user table
$sql = 'SELECT username,email,password FROM users;';
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:50%;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid black;
        }

        th,td{
            padding:10px;
            text-align:left;
        }
    </style>
</head>
<body>
    <h2>Add New User</h2>
    <form action="" method='post'>
        <input type="text" name='username' placeholder='username'><br>
        <input type="email" name='email' placeholder='email'><br>
        <input type="password" name='password' placeholder='password'><br>
        <input type="submit">
    </form>

    <h2>Seeing Data:</h2>

    <?php
        if($result->rowCount()){
            echo "<table>";
            echo "<tr><th>Username</th><th>Email</th><th>Password</th></tr>";
            // Display The Data

            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
                echo "<tr><td>$username</td> <td>$email</td> <td>$password</td> </tr>";
            }

            echo "</table>";
        }else{
            echo "No Data In The Table";
        }
        
    ?>
    
    
</body>
</html>