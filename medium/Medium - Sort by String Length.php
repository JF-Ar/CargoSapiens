<?php
/* Title: Sort by String Length
Link: https://edabit.com/challenge/kMFewjirzYuzjCoQJ
Description: Create a function that returns an array of strings sorted by length in ascending order.
NOTES: Strings will have unique lengths, so don't worry about comparing two strings with identical length.
*/

function sortByLength($arr) {
	usort($arr,function($a,$b){
		return strlen($a)-strlen($b);
	});
	return $arr;
}

sortByLength(["may", "april", "september", "august"]);