<?php
/* Title: Maximum Edge of a Triangle
Link: https://edabit.com/challenge/gsffHgkQZniRXwJXs
Description: Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers.
*/

function nextEdge($side1, $side2) {
	return ($side1 + $side2) -1;
}

nextEdge(2,5);