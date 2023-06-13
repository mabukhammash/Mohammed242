<?php


function fact_number($num){
    if ($num == 0){
        return 1;
    }
    else{
        return $num * fact_number($num - 1);
    }
 }
 echo fact_number(6);


?>