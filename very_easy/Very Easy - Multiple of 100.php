<?php
/* Title:Multiple of 100
Link: https://edabit.com/challenge/HxJ7XYSQe4qkJjf2s
Description: Create a function that takes an integer and returns true if it's divisible by 100, otherwise return false.
*/


function divisible($num) {
	if ($num % 100 == 0){
		return true;
	}else{
		return false;
	}
}

divisible(100000);