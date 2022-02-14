<?php
/* Title:A Redundant Function
Link: https://edabit.com/challenge/ezXBM6Bpu7bXZJfdd
Description: Write a function that takes in a string s and returns a function that returns s.
*/

function redundant($s) {
	return function () use ($s) {
		return $s;
	};
}

redundant('TeamCargoSapiens');