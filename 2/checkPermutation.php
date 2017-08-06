<?php
/**
* Permutation: Means same charachters but different orders 
* Below are the permutations of string ABC.
* ABC ACB BAC BCA CBA CAB
*/

/**
* Given two strings, check if one is permutation of the other
* @param string $str1
* @param string $str2
* 
* @return bool
*/
function checkPermutation($str1, $str2)
{
	if (strlen($str1) != strlen($str2)) {
		return false;
	}

	$hm = array();

	for ($i = 0; $i < strlen($str1); $i++) {
		$currentChar = $str1[$i];
		if (isset($hm[$currentChar])) {
			$hm[$currentChar] += 1;
		} else {
			$hm[$currentChar] = 1;
		}
	}

	for ($i = 0; $i < strlen($str2); $i++) {
		$currentChar = $str2[$i];
		if (isset($hm[$currentChar])) {
			$hm[$currentChar] -= 1;
		} else {
			$hm[$currentChar] = 1;
		}
	}

	foreach ($hm as $k => $v) {
		if ($v > 0) {
			return false;
		}
	}

	return true;
}

function checkPermutationBySorting($str1, $str2)
{
	// string to char array
	$arr1 = str_split($str1);
	$arr2 = str_split($str2);

	//sort array
	sort($arr1);
	sort($arr2);

	//array to string
	$str1 = implode($arr1);
	$str2 = implode($arr2);

	return ($str1 == $str2);
}

$test1 = checkPermutation('ABC', 'CAB');
var_dump($test1);

$test2 = checkPermutation('ABC', 'ABD');
var_dump($test2);

$test3 = checkPermutation('god', 'dog');
var_dump($test3);
