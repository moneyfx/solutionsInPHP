<?php
/**
* Palindrome is word that is same forwards and backwards
*/

/**
* @param $str
*
* @return bool
*/
function isPalindromePermutation($str)
{	
	return (getNumberOfCharsWithOddFrequency($str) <=1 );
}

function getNumberOfCharsWithOddFrequency($str)
{
	$hm = array();
	for ($i = 0; $i < strlen($str); $i++) {
		//Skip space(need to skip any other char that is not a-z)
		if ($str[$i] == ' ') {
			continue;
		}

		if (isset($hm[$str[$i]])) {
			$hm[$str[$i]]--;
		} else {
			$hm[$str[$i]] = 1;
		}
	}

	$num = 0;

	foreach ($hm as $k => $v) {
		if ($v > 0) {
			$num++;
		}
	}

	return $num;
}

$test1 = isPalindromePermutation("tact coa");
var_dump($test1);
