<?php
/* Title: Upper or Lower Case
Link: https://edabit.com/challenge/yBCXZ97zYeEirPWSL
Description: Return the smallest number of steps it takes to convert a string entirely into uppercase or entirely into lower case, whichever takes the fewest number of steps. A step consists of changing one character from lower to upper case, or vice versa.
*/

function stepsToConvert($str) {
	$upperCase = strtoupper($str);
  $lowCase = strtolower($str);
	$upperConvert = levenshtein($str,$upperCase );
  $lowerConvert = levenshtein($str,$lowCase );
  
  if( $upperConvert<= $lowerConvert){
	return $upperConvert;
  }else{
	return $lowerConvert;
  }
}
stepsToConvert("abaCCC");