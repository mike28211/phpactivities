

<?php

$date = "10/20/1999  <br>";
$bday = substr($date, 3, 2);

if($bday % 2 == 0){
    echo $date ;
    echo " is even";
}else{
    echo $date;
    echo " is odd";
}
?>

