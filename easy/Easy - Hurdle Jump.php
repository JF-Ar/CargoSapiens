<?php
/* Title: Hurdle Jump
Link: https://edabit.com/challenge/hA8BLACQf7SNW2PGy
Description: Create a function that takes an array of hurdle heights and a jumper's jump height, and determine whether or not the hurdler can clear all the hurdles.

A hurdler can clear a hurdle if their jump height is greater than or equal to the hurdle height.
*/

function hurdleJump($hurdles, $jumpHeight) {
	foreach($hurdles as $hurdle) {
		if($hurdle > $jumpHeight) {
			return false;
		}
	}
	return true;
}
hurdleJump([5,3,2,1],5);