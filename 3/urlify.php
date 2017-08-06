<?php

/**
* Replace All spaces in a string with '%20'
*
* @param string $str
* @param int $len
*
* @return string 
*/
function urlify($str, $len)
{
	$charArray = str_split($str);
	$count = count($charArray);

	for ($i = $count - 1; $i >= 0; $i-- )  {
		$currentChar = $charArray[$i];

	}

	return implode($charArray);
}
