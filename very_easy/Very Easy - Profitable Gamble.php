<?php
/* Title: Profitable Gamble
Link: https://edabit.com/challenge/P8pZvC2uNeAZqQPix
Description: Create a function that takes three arguments prob, prize, pay and returns true if prob * prize > pay; otherwise return false.
*/

function profitableGamble($prob, $prize, $pay) {
	if (($prob * $prize) > $pay){
		return true;
	}else{
		return false;
	}
}

profitableGamble(0.9, 1, 2);