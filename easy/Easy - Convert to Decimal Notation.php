<?php
/* Title: Convert to Decimal Notation
Link: 
Description: Create a function to convert an array of percentages to their decimal equivalents.
*/

function getAbsSum($arr) {
	foreach($arr as $value) {
		$newArr[]= str_replace('%', '', $value) / 100.00;
	} print_r($newArr);
} 
getAbsSum(["1%", "2%", "3%"]);