<?php

session_start();

require_once('data.php');


if(isset($_POST['mail'])&&isset($_POST['pass'])){
  $mai=$_POST['mail'];
  $pas=$_POST['pass'];


    if(!empty($mai) && !empty($pas)){

          $is=false;
          foreach($users_data as $user){
          if($user['email']==$mai && $user['pass']==$pas){
            $is=true;
            break;
         }
       }
    if($is==true){
        $_SESSION['welcome_name']=$mai;
        header('location:home.php');
     }else{
    echo 'please check your mail or password';
}
} else{
    echo 'empty field';
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
    <?php if(!empty($all_errors)) :?>
        <?php foreach($all_errors as $error):?>
            <div class="alert alert-info">
                 <?= $error?>
            </div>
        <?php endforeach ?>
    <?php endif ?>    

    <form action="" method="POST">
        <br><br><br><br><br><br><br><br>
        <table align = "center">
            <thead>
                <tr>
                    <th width="130"></th>
                    <th width="200"></th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="mail">
                        </td>
                    </tr>
                   
                     <tr>
                        <td>password:</td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                </tbody>
        </table><br>
    <input type="submit" value="Login" style="margin-left: 760px;">
  </form>
 </body>
 </html>