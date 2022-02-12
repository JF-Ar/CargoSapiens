<?php
/* Title: Temperature Conversion
Link: https://edabit.com/challenge/K35QHoBj8qC7b6QXf
Description: Write a program that takes a temperature input in $celsius and converts it to Fahrenheit and Kelvin. Return the converted temperature values in an array.

Temperature in Fahrenheit from Celsius is:
F = C*9/5 +32
Temperature in Kelvin from Celsius is:
K = C + 273.15
NOTES: Return calculated temperatures up to two decimal places.
       Return "Invalid" if K is less than 0. 
*/

function tempConversion($celsius) {
		$k = $celsius + 273.15;
		$f = $celsius*(9/5) + 32;
		$k = number_format($k,2);
		$f = number_format($f,2);
		if ($k < 0){
			return 'Invalid';
		}else{
			return array("Fahrenheit"=>$f, "Kelvin"=>$k);
		} 
}