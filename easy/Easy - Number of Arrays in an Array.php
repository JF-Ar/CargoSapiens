<?php
/* Title: Number of Arrays in an Array
Link: https://edabit.com/challenge/kJrgHnBAkPpt8d6BA
Description: Return the total number of arrays inside a given array.
*/

function num_of_subarrays($arr) {
	return count(array_filter($arr, "is_array"));
}
num_of_subarrays([1,2,3]);