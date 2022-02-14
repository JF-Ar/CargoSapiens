<?php
/* Title: Using the "&&" Operator
Link: https://edabit.com/challenge/h8JhEWy4KpCGgKiqZ
Description: PHP has a logical operator &&. The && operator takes two boolean values, and returns true if both values are true.

Consider a && b:

a is checked if it is true or false.
If a is false, false is returned.
b is checked if it is true or false.
If b is false, false is returned.
Otherwise, true is returned (as both a and b are therefore true ).
The && operator will only return true for true && true.

Make a function using the && operator.
*/

function Compare($a, $b) {
	return $a&&$b;
}

Compare(true,false);
