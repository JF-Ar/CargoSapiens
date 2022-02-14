<?php
/* Title: Concatenate First and Last Name into One String
Link: https://edabit.com/challenge/BXshCsqwtB6NMuQWH
Description: Given two strings, firstName and lastName, return a single string in the format "last, first".
*/

function concatName($firstName, $lastName) {
	return ("$lastName, $firstName");
}
concatName("Cargo", "Sapiens");