<?php
/* Title: Less Than 100?
Link: https://edabit.com/challenge/RFdiwrEc8vxrSiCSY
Description: Given two numbers, return true if the sum of both numbers is less than 100. Otherwise return false.
*/

function lassThanHundred($number1, $number2){

    $result  = $number1 + $number2;
    if ($result < 100){
        return true;
    }else{
        return false;
    }
}

lassThanHundred(10,100);