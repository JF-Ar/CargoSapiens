<?php
/* Title: Next Happy Year
Link: https://edabit.com/challenge/qNgSqHRSHmzHzZ3hG
Description: Mubashir needs your help to find out next happy year.
A Happy Year is the year with only distinct digits. Create a function that takes an integer $year and returns the next happy year.
*/

function happyYear($year) {
	while(count(array_unique(str_split($year+1)))!==4){
		$year=$year+1;
	}
	echo ($year+1);	
}

happyYear(2017);