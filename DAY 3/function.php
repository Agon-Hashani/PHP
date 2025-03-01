<?php

function helloWorld(){
    echo "Hello world";
}

helloWorld();

function sum(){
    $value = 120 + 20;
    echo $value;
}

function maximum($x, $y){
    if($x > $y){
        return $x;
    }else{
        return $y;
    }
}

$x=10;
$y=20;

$test  = maximum($x, $y);
echo "the bigger number was $test";

?>