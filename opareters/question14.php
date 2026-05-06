<?php
//Check age eligibility (AND)
$age=25;
$result=($age>=18 && $age<=60)?"Eligible for work.":"Not eligible for work.";
echo $result;
?>