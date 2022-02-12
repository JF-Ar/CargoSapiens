<?php
/* Title: Multiply by Length
Link: https://edabit.com/challenge/mTJWdDW6QAvfzdWdL
Description: Create a function to multiply all of the values in an array by the amount of values in the given array */
function MultiplyByLength($arr) {
	$multiple = count($arr);
	$newArr = [];
	foreach($arr as $value) {
		$newArr[]= $value*$multiple;
	}
	return $newArr;
}

MultiplyByLength([2, 3, 1, 0]);