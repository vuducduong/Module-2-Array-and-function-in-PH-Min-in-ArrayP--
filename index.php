<?php

function mArray($array){
    $min = $array[0];
    foreach ($array as $value){
        if($min>$value){
            $min = $value;
        }
    }
    echo "Min in Array: ".$min;
}

echo minArray([8,3,5,6,8,5,85,7]);

