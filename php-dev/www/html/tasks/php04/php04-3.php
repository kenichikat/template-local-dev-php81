<?php

function kake_all($arr){

    $ans = 1;
    foreach ($arr as $a){
        $ans *= $a;
    }

    return $ans;
}

echo kake_all(array(1, 3, 5 ,7, 9) );