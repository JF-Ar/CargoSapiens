<?php
/* Title: Find the Second Largest Number
Link: https://edabit.com/challenge/LR7Pqhp7MLMvm4yiJ
Description: Create a function that takes a list of numbers and returns the second largest number.
*/


function secondLargest($a) {
	rsort($a);
	echo ($a[1]);
}
secondLargest([10, 40, 30, 20, 50]);