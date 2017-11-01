<?php
/**
* this is how to compare floats in php
*/

$a = 1;
$b = 0.7;

$c = $a - $b;// close to 0.3 
var_dump($c);

// use following instead of ($c == 0.3) - floats are not absolutely-precise
if ((string) $c === (string) 0.3) {
    echo 'equal';
} else {
    echo 'not equal';
}
echo PHP_EOL;

$d = $c - 0.3; // close to 0
var_dump($d);
