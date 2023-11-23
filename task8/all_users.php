<?php

$connection = mysqli_connect('localhost', 'root', '', 'users');
$state = 'SELECT * from user_info';
$execute = mysqli_query($connection, $state);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">gender</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($execute)) : ?>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><?= $row['gender'] ?></td>

                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </form>

</body>

</html>