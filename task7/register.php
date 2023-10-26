<?php

$flag=0;
$all_errors=[];

if(isset($_POST['mail'])&&isset($_POST['pass'])&&isset($_POST['uname'])){
  $mai=$_POST['mail'];
  $pas=$_POST['pass'];
  $name=$_POST['uname'];
  if(!empty($name)){
    if(strlen($name)>=10){
      if(preg_match('/senior$/',$name)){
          
        $flag++;

      }else{

        $all_errors['senior']='user name must contain senior word at the end';

      }

    }else{

       $all_errors['namelen']='username should be at least 10 characters';

    }

  }else{

    $all_errors['emptyname']='empty username';

  }


  if(!empty($pas)){
    if(strlen($pas)>=10){
       if(preg_match('@[A-Z][a-z]@', $pas)){
             
           $flag++;

       }else{

        $all_errors['passupp']='password must have upper & lower letters';

       } 
    }else{

        $all_errors['passlen']='password should be at least 10 characters';

    }
  }else{

    $all_errors['emptypass']='empty password';

  }
 

  if(!empty($mai)){
     if (filter_var($mai, FILTER_VALIDATE_EMAIL)) {
       
        $flag++;

   }else{

    $all_errors['invalid']='Invalid email format';

   }
  }else{

    $all_errors['emptyemail']='empty email';

  }

}
if($flag>=3 && empty($all_errors)){
    header('location:login.php');
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
                 <?= $error ?>
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
                        <td>Username:</td>
                        <td>
                            <input type="text" name="uname">
                        </td>
                    </tr>
                     <tr>
                        <td>password:</td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="mail">
                        </td>
                    </tr>
                </tbody>
        </table><br>
    <input type="submit" value="Register" style="margin-left: 760px;">
  </form>
 </body>
 </html>