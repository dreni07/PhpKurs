<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
        }

        tr,td,th{
            border:1px solid black;
            padding:10px;
        }
    </style>
</head>
<body>
    <?php
        include_once('config.php');
        
        $get_users = $pdo->prepare('SELECT * FROM user;');
        $get_users->execute();
        $users = $get_users->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Surname</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['surname']?></td>
                    <td>
                        <a href="delete.php?user_id=<?php echo $user['id'] ?>">Delete</a>
                    </td>
                    <td>
                        <a href="update.php?user_id=<?php echo $user['id']?>">Update</a>
                    </td>
                    <td>
                        <a href="index.php">Add</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>