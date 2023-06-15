<?php

for ($i = 1; $i > 100; $i++){
    if ($i % 3){
        echo "$i Fizz";
    }
    elseif ($i % 5){
        echo "$i Buzz";
    }
    elseif ($i % 3 && $i % 5){
        echo "$i FizzBuzz";
    }
}
echo $i;
?>