<?php
/* Title: Football Points
Link: https://edabit.com/challenge/QWMo78Agfzgc8iAQo
Description: Create a function that takes the number of wins, draws and losses and calculates the number of points a football team has obtained so far.
wins get 3 points
draws get 1 point
losses get 0 points
*/

function getPoints($wins, $draws, $losses) {
	$points = ($wins*3) + ($draws*1) + ($losses*0);
	echo ($points);
	
}

getPoints(3, 4, 2);