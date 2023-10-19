<?php
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
                        <td>salutation</td>
                        <td>
                            <select style="width:140px ;" name="server" id="server">
                                <option id = "server" value="None" name="None">None</option>
                                <option id = "server" value="Hi"name="Hi">Hi</option>
                                <option id = "server" value="Hello"name="Hello">Hello</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Firstname:</td>
                        <td>
                            <input type="text" name="fname">
                        </td>
                    </tr>
                     <tr>
                        <td>Lastname:</td>
                        <td>
                            <input type="text" name="lname">
                        </td>
                    </tr>
                      <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" id="role" name="role" value="Male">Male
                            <input type="radio" id="role" name="role" value="Female">Female
                        </td>
                    </tr>
                     <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="mail">
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td>
                            <input type="date" name="date">
                        </td>
                    </tr>
                     <tr>
                        <td>Address :</td>
                        <td>
                            <textarea name="add" id="" cols="30" rows="10"></textarea>
                            <!-- <input type="feild" name="add"> -->
                        </td>
                    </tr>
            </tbody>
        </table><br>
        <input type="submit" value="submit" style="margin-left: 600px;">
    </form>
</body>
</html>