<?php
$age = 100;

switch ($age) 
{
    case ($age >= 0 && $age <= 12):
        echo "Child";
        break;
    case ($age >= 13 && $age <= 19):
        echo "Teenager";
        break;
    case ($age >= 20 && $age <= 59):
        echo "Adult";
        break;
    case ($age >= 60 && $age <=80):
        echo "Senior-Citizen";
        break;
    default: ($age >80);
        echo "Invalid age";
        break;
}
?>