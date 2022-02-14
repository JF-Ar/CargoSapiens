<?php
/* Title: Sum of Digits of a Positive Integer
Link: https://edabit.com/challenge/xnLysdAKwSX7QcrFt
Description: An instructor has given her student an assignment to calculate the sum of the digits of a positive integer using recursion.The student came up with the solution but the solution does not seem to be correct. Help her fix the error.
NOTES: Input is a positive integer.
*/

function sumDigit($positiveInteger) {
	return array_sum(str_split($positiveInteger));
}
sumDigit(111);