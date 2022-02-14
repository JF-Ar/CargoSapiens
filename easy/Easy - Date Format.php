<?php
/* Title: Date Format
Link: https://edabit.com/challenge/zcqQ4TDnLRqTtzrNy
Description: Create a function that converts a date formatted as MM/DD/YYYY to YYYYDDMM.
*/

function dateFormat($arr) {
	echo str_replace('/', '',$arr);
}
dateFormat("01/15/2019");