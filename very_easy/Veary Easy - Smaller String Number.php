<?php
/* Title: Smaller String Number
Link: https://edabit.com/challenge/2a2kdgSLeNzRgZruQ
Description: Create a function that returns the smaller number.
Notas:
Numbers will be represented as strings, and your output should also be a string.
*/

function smallerNumber($num1, $num2){
    $var = min($num1, $num2);
    echo "$var <br>";
    if (is_string($var)) {
        echo "is string\n";
       } else {
        echo "is not an string\n";
       }

}

smallerNumber("6","6");