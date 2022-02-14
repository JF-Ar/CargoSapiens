<?php
/* Title: Automorphic Number
Link: https://edabit.com/challenge/HkfNug4LAFnXAXJ6X
Description: A number is called Automorphic number if its square ends in the original number. Create a function that takes a number $n and returns true if it is an Automorphic number, otherwise false.
*/

function automorphic($n) {
  $m = $n ** 2;
  $s = strval($n);
  return substr_compare($m, $s, -strlen($s))===0;
}

automorphic(6);