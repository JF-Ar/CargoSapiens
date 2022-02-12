<?php
/* Title:Is the Number Less than or Equal to Zero?
Link: https://edabit.com/challenge/dewkJQufEq3nwNeGZ
Description: Create a function that takes a number as its only argument and returns true if it's less than or equal to zero, otherwise return false.
*/

function lessThanOrEqualToZero($num) {
	if ($num <= 0){
		return true;
	}else{
		return false;
	}
}

lessThanOrEqualToZero(0);