<?php
/* Title: Divides Evenly
Link: https://edabit.com/challenge/EehSF4TaHuCvx5LpX
Description: Given two integers, $a and $b, return true if $a can be divided evenly by $b. Return false otherwise.
*/

function dividesEvenly($a, $b) {
	if ($a % $b == 0){
        echo "true <br>";
        echo ($a/$b);
    }else{
        echo 'false <br>';
        echo $a/$b;
    }
}
dividesEvenly(85, 4);