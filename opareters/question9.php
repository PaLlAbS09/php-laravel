<?php
//Check OR condition (weekend or holiday)
$day="Saturday";
$result=($day=="Saturday" || $day=="Sunday")?"It's a weekend.":"It's a holiday.";
echo $result;

?>