<?php
/* Title: Retrieve the Subreddit
Link: https://edabit.com/challenge/rvDkhCGdmsNZ7LQRg
Description: Create a function to extract the name of the subreddit from its URL.
*/
function subRedditName($link) {
	$str = strstr($link, 'r/');
	$order   = array("r/", "/");
	$replace = "";
	$newstr = str_replace($order, $replace, $str);
	return $newstr;
}

subRedditName("https://www.reddit.com/r/relationships/");