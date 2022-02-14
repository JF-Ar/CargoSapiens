<?php
/* Title: Secret Function 2.0
Link: https://edabit.com/challenge/eCEMJ5qTivWpmFFYK
Description: Create a function based on the input and output. Look at the examples, there is a pattern.
*/  

function secret($text) {
	$newarr = explode('*', $text);
    $str = "<$newarr[0]></$newarr[0]>";
    return str_repeat($str,$newarr[1]);
}

secret("div*2");

