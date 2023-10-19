<?php
$users_data = [
  ['username' => 'ahmed sayed' , 'pass' => 123456],
  ['username' => 'mohamed sayed' , 'pass' => 896523],
  ['username' => 'islam mohamed' , 'pass' => 15975],
  ];
  $flag = 0 ;
if(isset($_GET['user'])&&isset($_GET['pass'])){
    foreach($users_data as $user){
        if($user['username']==$_GET['user']&&$user['pass']==$_GET['pass']){
            $flag = 1 ;
            break;
        }
    }
    if($flag==1){
        header('location:home.php');
    }else{
        header('location:404.php');
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
<body align="center">
    <form action="">
        <h2>Login</h2>
        username:<br><input type="text" name="user"><br>
        password:<br><input type="password" name="pass"><br>
        <button>login</button>
    </form>
</body>
</html>