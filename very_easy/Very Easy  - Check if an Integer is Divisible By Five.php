<?php
/* Title: Check if an Integer is Divisible By Five
Link: https://edabit.com/challenge/Bk9wcbQJDopzS64yZ
Description: Create a function that returns true if an integer is evenly divisible by 5, and false otherwise.
*/

function divisibleByFive($n) {
	if ($n % 5 == 0){
		return true;
	}else{
		return false;
	}
}
divisibleByFive(355);