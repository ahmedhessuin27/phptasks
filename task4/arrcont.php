<?php
include("footer,header/header.php");
?>
<?php
require_once("array.php");

foreach($countryList as $k=> $contry){
    echo $k.'=> '. $contry.'<br>' ;
}
foreach($stateList['CA']  as $k=> $list){
         echo $k.'=> '. $list.'<br>' ;
}
?>
<?php
include("footer,header/foot.php");
?>