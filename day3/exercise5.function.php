<?php

function averageCalc($numbers){
    $sum = 0;
    $nbElement = count($numbers);


    foreach ($numbers as $value) {
       $sum += $value;
        
    }
    $average = $sum / $nbElement;
    return $average;
}

?>