<?php
//Input a year and check whether it is a leap year or not using ternary.
$year=1999;
$result=($year%4==0)?"leap year":"not a leap year";
echo "<br>" . $result;
?>