<?php
/* Title: Check String for Spaces
Link: 
Description: Create a function that returns true if a string contains any spaces. 
*/

function hasSpaces($str) {
	if ((strstr($str, ' ')) != false) { 
    return true;
	}
}

hasSpaces("Cargo Sapiens");