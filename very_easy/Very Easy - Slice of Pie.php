<?php
/* Title: Slice of Pie
Link: https://edabit.com/challenge/tdksELEr2WTWNS7Eb
Description: Create a function that determines whether or not it's possible to split a pie fairly given these three parameters:

Total number of slices.
Number of recipients.
How many slices each person gets.
*/

function equalSlices($total, $people, $each) {
	if (($people*$each) <= $total){
		return true;
	}else{
		return false;
	}
}

equalSlices(8, 3, 2);