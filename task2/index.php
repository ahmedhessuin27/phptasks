<?php
// string data type
$x = 'ahmed';
echo $x ; 
echo'<br>';
echo gettype($x);
echo'<br>';
var_dump($x);
echo'<br>';
# integer data type
$x = 20;
echo $x ; 
echo'<br>';
echo gettype($x);
echo'<br>';
var_dump($x);
echo'<br>';
# boolian data type
$x = true;
echo $x ; 
echo'<br>';
echo gettype($x);
echo'<br>';
var_dump($x);
echo'<br>';
/*
this is a
float data type
*/
$x = 20.5;
echo $x ; 
echo'<br>';
echo gettype($x);
echo'<br>';
var_dump($x);
echo'<br>';
/**
 * tis is the def betwwen assign by value  & assign by reference
 * in assign by value you give the variable a static value doesn't change by changing the variable that assigned to it
 * but in assign by reference it keep changing
 */
$y=5;
$z=$y;
$y=50;
echo $z;//z=5
echo'<br>';
$y=5;
$z=&$y;
$y=50;
echo $z;//z=50
echo'<br>';
//how to difine a constant
define('PRO','ahmed');
echo PRO;
echo'<br>';
#the const is global so you can call it in a function
function def()
{
   echo 'the prof here is ';
   echo PRO;
}
def();
echo'<br>';
#but not the other variable can call in a function so you should make it global first
$name='ahmed';
function def2()
{
    global $name;
   echo 'the prof here is ';
   echo $name;
   
}
def2();

?>