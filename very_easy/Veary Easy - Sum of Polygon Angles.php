<?php
/* Title: Sum of Polygon Angles
Link: https://edabit.com/challenge/bAaLrzg3gsmxEyJPK
Description: Given an n-sided regular polygon n, return the total sum of internal angles (in degrees).
*/

function sumPolygon($n) {
	echo ($n - 2) * 180;
}
sumPolygon(6);