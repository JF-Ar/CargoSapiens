<?php
/* Title: Filter out Strings from an Array
Link: https://edabit.com/challenge/hxtMWdbQ8M5HeSxd2
Description: Create a function that takes an array of non-negative integers and strings and return a new array without the strings.
*/

function teste($arr) {
	print_r(array_filter($arr, 'is_int'));
}
teste([1, 2, "a", "b"]);