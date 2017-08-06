<?php
/**
* this is how to compare floats in php
*/

$a = 1;
$b = 0.7;

$c = $a - $b;// close to 0.3 
var_dump($c);

//use following instead of ($c == 0.3)
if (abs($c - 0.3) < 0.00001) {
    echo 'equal';
} else {
    echo 'not equal';
}
echo PHP_EOL;

$d = $c - 0.3; // close to 0
var_dump($d);
