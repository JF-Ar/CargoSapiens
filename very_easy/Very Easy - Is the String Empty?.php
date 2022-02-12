<?php
/* Title: Is the String Empty?
Link: https://edabit.com/challenge/j4YKasu6Erx4fJwXG
Description: Create a function that returns true if a string is empty and false otherwise.
*/

function EmptyOrNot($str) {
	$i = strlen($str);
	if ($i == 0){
		echo true;
	}else{
		echo false;
	}	
}
EmptyOrNot('');
