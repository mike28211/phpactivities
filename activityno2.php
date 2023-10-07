<?php 
// Create a function that will return the square root of every number from 1 - N.
// Function should return array.


function sqrtofarray($N){
    $number = [];


    for($i = 1; $i <= $N ; $i++){

      $number2 = sqrt($i);
      array_push($number,$number2);
      
    }
    return $number;


}
$display = json_encode(sqrtofarray(10));
echo $display;

?>