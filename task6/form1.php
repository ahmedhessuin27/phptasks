<?php
// if(isset($_GET['username'])&&isset($_GET['password'])&&isset($_GET['city'])){
    
//     $user=$_GET['username'];
//     $pass=$_GET['password'];
//     $cit=$_GET['city'];
//     echo $user ,' ', $pass ,' ', $cit;
// }
// if(isset($_GET['server'])){
//     $serve=$_GET['server'];
//     echo $serve;
// }
// if(isset($_GET['role'])){
//     $add=$_GET['role'];
//     echo $add;
// }
// if(isset($_GET['mail'])){
//     $mai=$_GET['mail'];
//     echo $mai;
// }if(isset($_GET['payroll'])){
//     $pay=$_GET['payroll'];
//     echo "<br>$pay";
// }if(isset($_GET['self-service'])){
//     $self=$_GET['self-service'];
//     echo $self;
// }
    
        foreach($_GET as $ele){
            if(isset($ele)){
                echo "<br>" . $ele; 
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
    <form action="" method="">
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
                            <input type="text" name="username">
                        </td>
                    </tr>
                     <tr>
                        <td>password:</td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                     <tr>
                        <td>city of Employment:</td>
                        <td>
                            <input type="text" name="city">
                        </td>
                    </tr>
                     <tr>
                        <td>Web server:</td>
                        <td>
                            <select style="width:140px ;" name="server" id="server">
                                <option id = "server" value="AWS" name="aws">AWS</option>
                                <option id = "server" value="Azur"name="azur">Azur</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Please specify your role:</td>
                        <td>
                            <input type="radio" id="role" name="role" value="Admin">Admin<br>
                            <input type="radio" id="role" name="role" value="Engineer">Engineer<br>
                            <input type="radio" id="role" name="role" value="Maneger">Maneger<br>
                            <input type="radio" id="role" name="role" value="Guest">Guest<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Single sign-on to the following:</td>
                        <td>
                            <input type="checkbox" name="mail" value="Mail">Mail<br>
                            <input type="checkbox" name="payroll"value="Payroll">Payroll<br>
                            <input type="checkbox" name="self-service"value="Self-service">Self-service<br>
                        </td>
                    </tr>
            </tbody>
        </table><br>
        <input type="submit" value="Login" style="margin-left: 760px;">
        <input type="reset" value="Reset">
    </form>
</body>
</html>