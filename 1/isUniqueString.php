<?php

/**
* Find if a string has unique characters 
* @param string $str 
*
* @return bool
*/
function isUniqueString($str)
{
	$hm = array();

	for ($i = 0; $i < strlen($str); $i++) {
		$currentChar = $str[$i];
		if (isset($hm[$currentChar])) { // or use array_key_exists()
			return false;
		}

		$hm[$currentChar] = true;
	}

	return true;
}

$test1 = isUniqueString('test');
var_dump($test1);

$test2 = isUniqueString('mani');
var_dump($test2);
