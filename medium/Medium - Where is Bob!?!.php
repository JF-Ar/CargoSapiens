<?php
/* Title: Where is Bob!?!
Link: https://edabit.com/challenge/YcLfDdW2k6iSdvH4P
Description: Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.

Notes:
Assume all names start with a capital letter and are lowercase thereafter (i.e. don't worry about finding "BOB" or "bob").
*/

function findBob($names) {
	$key_bob = array_search('Bob', $names);
	if ($key_bob === false){
		return -1;
	}else{
		return $key_bob;
	}
}

findBob(["Jimmy", "Layla", "Bob"]);