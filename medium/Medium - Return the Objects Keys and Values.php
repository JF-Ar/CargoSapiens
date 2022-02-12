<?php
/* Title: Return the Objects Keys and Values
Link: https://edabit.com/challenge/m7DEpcktfcJPkrRoi
Description: Create a function that takes an object and returns the keys and values as separate arrays. Return the keys sorted alphabetically, and their corresponding values in the same order.
*/


function keysAndValues($obj) {
	$keys = array_keys($obj);
	$values = array_values($obj);
	$sorted = array_multisort($keys, $values);
	$keys = array_map('strval', $keys);
	
	return [$keys, $values];
	
}
keysAndValues(array("a" => 1, "b" => 2, "c" => 3 ));