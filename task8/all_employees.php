<?php

$connection = mysqli_connect('localhost', 'root', '', 'hr_db');
$state = 'SELECT * from employees';
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
                    <th scope="col">first_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">salary</th>
                    <th scope="col">email</th>
                    <th scope="col">job_id</th>
                    <th scope="col">department_id</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($execute)) : ?>
                    <tr>
                        <th scope="row"><?= $row['employee_id'] ?></th>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['salary'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['job_id'] ?></td>
                        <td><?= $row['department_id'] ?></td>

                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </form>

</body>

</html>