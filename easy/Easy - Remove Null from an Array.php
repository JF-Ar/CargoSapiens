<?php
/* Title: Remove Null from an Array
Link: https://edabit.com/challenge/M5EraEkdDS94ni6RT
Description: Create a function to remove all null values from an array.
*/

function removeNull($arr) {
	$array = (array_filter($arr));
	return array_values($array);
}

removeNull(["a", null, "b", null]);