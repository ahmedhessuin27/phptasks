<?php
#factorial of a number
function factorial($num)
{
   $x=1;
   for($i=$num;$i>0;$i--){
      $x*=$num;
      $num--;
   }
   return $x;
}
echo  factorial(6);
echo'<br>';

#reversing
function rev($name)
{
    $x='';
    $z=0;
    for($i=strlen($name)-1;$i>=0;$i--){
      $x[$z]=$name[$i];
      $z++;
   }
   return $x;
}
echo rev('ahmed');
echo'<br>';

#recursive function
function display_numbers($n) {
    if ($n > 0) {
        display_numbers($n - 1);
        echo $n . " ";
    }
}
display_numbers(5);
echo'<br>';
#first word of sentence
$sentence='ahmed is my name';
$x='';
for($i=0;$i<strpos($sentence,' ');$i++){
    $x[$i]=$sentence[$i];
}
echo $x;
echo'<br>';
#random password
function rando($num)
{
   $password='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
   $x=substr(str_shuffle($password),0,$num);
   return $x;
}
echo rando(10);
echo'<br>';

#display numbers on one line
for($i=1;$i<=10;$i++){
   echo $i. ' ';
}


?>