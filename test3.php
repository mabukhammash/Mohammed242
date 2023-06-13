<?php

$e = [1,2,3];
$r = [2,4,6,8];
$loop = count($e) > count($r)? $e :$r ;
foreach ($loop as $key => $value){
    $mulit [] = ($a[$key] ?? 0) * ($b[$key] ?? 0);
}
var_dump($mulit);







?>