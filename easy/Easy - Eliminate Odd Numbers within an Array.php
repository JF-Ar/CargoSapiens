<?php
/*
Title: Eliminate Odd Numbers within an Array
link: https://edabit.com/challenge/xp7X8H3M6yFfiMXz4
Description: "Create a function that takes an array of numbers and returns only the even values."
 */

function FindEvenValues($arr) {
    $even = [];
    foreach($arr as $value) {

        if ($value%2==0){
            $even[]=$value;
        }
        else{
        }
}   return $even;

}
FindEvenValues([1,2,3,4,5]);