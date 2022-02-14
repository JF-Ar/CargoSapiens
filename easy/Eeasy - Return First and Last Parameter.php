<?php
/* Title: Return First and Last Parameter
Link: https://edabit.com/challenge/JZLk4qjS7RytbgHJZ
Description: Write two functions:

firstArg() should return the first parameter passed in.
lastArg() should return the last parameter passed in.
*/

function firstArg() 
{
	if(func_num_args() == 0)
	{
		return null;
	}
	else
	{
		$arr = func_get_args();
		return $arr[0];
	}
}

function lastArg() 
{
	if(func_num_args() == 0)
	{
		return null;
	}
	else
	{
		$arr = func_get_args();
		return $arr[count($arr) - 1];
	}
}


firstArg(1, 2, 3);
lastArg(1, 2, 3);
