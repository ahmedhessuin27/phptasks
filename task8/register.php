<?php
$flag = 0;
$all_errors = [];

if (isset($_POST['uname']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['conf_pass']) && isset($_POST['gender'])) {
    $name = $_POST['uname'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $conf = $_POST['conf_pass'];
    $gender = $_POST['gender'];
    if (!empty($name)) {
        if (strlen($name) >= 10) {
            $flag++;
        } else {
            $all_errors['len'] = 'please enter username length >=10 characters';
        }
    } else {
        $all_errors['emptyname'] = 'please check empty field';
    }

    if (!empty($mail)) {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $flag++;
        } else {
            $all_errors['invalid'] = 'Invalid email format';
        }
    } else {
        $all_errors['emptymail'] = 'please check empty field';
    }

    if (!empty($pass)) {
        if (strlen($pass) >= 10) {
            $flag++;
        } else {

            $all_errors['passlen'] = 'password should be at least 10 characters';
        }
    } else {

        $all_errors['emptypass'] = 'empty password';
    }
    if (!empty($conf)) {
        if ($conf == $pass) {
            $flag++;
        } else {

            $all_errors['match'] = 'your confirm password doesnt match your password';
        }
    } else {

        $all_errors['emptyconf_pass'] = 'empty conf_password';
    }
    if (!empty($gender)) {
        $flag++;
    } else {
        $all_errors['choose_gender'] = 'Must Check on gender cannot be empty.';
    }
}
if ($flag >= 5 && empty($all_errors)) {
    $connection = mysqli_connect('localhost', 'root', '', 'users');
    $state = "INSERT INTO user_info(name,email,gender,password)
    VALUES('$name','$mail','$gender','$pass')";
    $execute = mysqli_query($connection, $state);
    header('location:all_users.php');
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
    <?php if (!empty($all_errors)) : ?>
        <?php foreach ($all_errors as $error) : ?>
            <div class="alert alert-info">
                <?= $error ?>
            </div>
        <?php endforeach ?>
    <?php endif ?>
    <form action="" method="POST">
        username:<input type="text" name="uname"><br>
        email:<input type="text" name="mail"><br>
        password:<input type="password" name="pass"><br>
        conf_password:<input type="password" name="conf_pass"><br>
        <input type="radio" id="gender" name="gender" value="male">male<br>
        <input type="radio" id="gender" name="gender" value="female">female<br>
        <button>Log In</button>


    </form>
</body>

</html>