<?php
/* Title: Even and Last
Link: 
Description: Given an array of integers $arr, return the sum of all the integers that have an even index, multiplied by the integer at the last index.

If the sequence is empty, you should return 0.
*/
function evenLast($arr) {
    $index = array_keys($arr);
    $list = [];
    if (empty($arr)){
        echo (0);
    }else{
        foreach ($index as $even){
            if ($even % 2 == 0){ 
                $list[] = $even; 

            }else{

            }
        }
        foreach($list as $i){
    //I Considered multiplying by the last number too, if index is even.
            $finalList[] = $arr[$i]*end($arr);
        }
        echo (array_sum($finalList));
    }
}
evenLast([1, 3, 3, 1, 10]);