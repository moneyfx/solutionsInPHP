<?php

/**
*
* @param string $str1
* @param string $str2
*
* @return bool
*/
function isOneEditAway($str1, $str2)
{
	if (abs(strlen($str1) - strlen($str2)) > 1) {
		return false;
	}

	//Swap if applies
	if (strlen($str1) < strlen($str2)) {
		$tmp = $str1;
		$str1 = $str2;
		$str2 = $tmp;
	}

	$hm = [];

	for ($i = 0; $i < strlen($str1); $i++) {
		$currentChar = $str1[$i];
		if (array_key_exists($currentChar, $hm)) {
			$hm[$currentChar]++;
		} else {
			$hm[$currentChar] = 1;
		}
	}

	for ($i = 0; $i < strlen($str2); $i++) {
		$currentChar = $str2[$i];
		if (array_key_exists($currentChar, $hm)) {
			$hm[$currentChar]--;
		}
	}

	$numberOfEdit = 0;
	foreach ($hm as $k => $v) {
		if ($v > 0) {
			$numberOfEdit++;
		}
	}

	return ($numberOfEdit == 1);	
}

$test1 = isOneEditAway('ple', 'pale');
var_dump($test1);

$test2 = isOneEditAway('pales', 'pale');
var_dump($test2);

$test3 = isOneEditAway('pale', 'bale');
var_dump($test3);

$test4 = isOneEditAway('pale', 'bake');
var_dump($test4);

$test5 = isOneEditAway('apple', 'aple');
var_dump($test5);

