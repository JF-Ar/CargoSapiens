<?php
/* Title: Return the Four Letter Strings
Link: https://edabit.com/challenge/49Jj8gZqZhS9nWtwM
Description: Create a function that takes an array of strings and returns the words that are exactly four letters.
*/

function isFourLetters($arr) {
    $newArr=[];
    foreach($arr as $value){
        if(strlen($value)==4){
            $newArr[]=$value;
        }
    }

    return $newArr;
}

isFourLetters(["Tomato", "Potato", "Pair"]);