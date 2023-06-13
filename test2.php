<?php


$strings = [
    'hello world',
    'welcome',
    'elham',
];
$s = '';
foreach ($strings as $string){
    if (strlen($string) > strlen ($s)){
        $s = $string ;
    }
}
echo $s ;
