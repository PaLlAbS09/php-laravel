<?php
// ternary operator
//question 1
$age=17;
$result=($age>=18)?" eligible to vote.":"not eligible to vote.";
echo $result;


//question 2
$num=39;
$result=($num>=40)?"pass":"fail";
echo "<br>" . $result;


//question 3
$num1=10;
$num2=8;
$result=($num1>$num2)?"num1 is greater than num2":"num2 is greater than num1";
echo "<br>" . $result;    

//question 4
$num=15;
$result=($num%2==0)?"even":"odd";
echo "<br>" . $result;

?>