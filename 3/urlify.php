<?php
/** tips:
* It is often easier to modify strings by going from end to beginning 
*/

/**
* Replaces All spaces in a string with '%20'
*
* @param string $str
* @param int $len
*
* @return string 
*/
function urlify($str, $len)
{
	$lengthOfString 		= strlen($str);
	$locationOfLastChar 	= 0;
	$locationOfCursor 		= $lengthOfString - 1;

	for ($i = 0; $i < $lengthOfString; $i++) {
		if ($str[$i] != ' ') {
			$locationOfLastChar = $i;
		}
	}

	for ($i = $locationOfLastChar; $i >= 0; $i--) {
		$currentChar = $str[$i];
		if ($currentChar != ' ') {
			$str[$locationOfCursor] = $currentChar;
			$locationOfCursor--;
		} else {
			$str[$locationOfCursor] 	= '0';
			$str[$locationOfCursor - 1] = '2';
			$str[$locationOfCursor - 2] = '%';
			$locationOfCursor -= 3;
		}
	}

	return $str;
}

$test1 = urlify("Mr John Smith    ", 13);
////////////////"Mr%20John%20Smith"

var_dump($test1);