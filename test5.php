<?php

function prime_num ($n){
    if  ($n == 1 ){
    return 0;
    }
    for ($i = 2 ; $i <= $n/2 ; $i++){
        if ($n % $i == 0){
            return false;
        }
            return true ; 
        }
    }
    echo prime_num(11);
    


?>