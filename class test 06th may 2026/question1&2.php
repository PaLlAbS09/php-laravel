<?php
//What are the main data types in PHP? Explain: String Integer Float Boolean Array NULL Object


//string: A sequence of characters enclosed in quotes. Example: "Pallab Sarkar"
$user="Pallab Sarkar";
$greetings="my name is";
echo $greetings." ".$user;


//integer: A whole number without a decimal point. Example: 25

$age=25;
echo "<br>Age: ".$age;


//float: A number with a decimal point. Example: 25.5
$salary=10000.50;
echo "<br>Salary:".$salary;


//boolean: A value that is either true or false. Example: true
$is_logged_in=true;
echo "<br> logged in: ".$is_logged_in;

//array: A collection of values indexed by keys. Example: array("Pallab", "Sarkar")
$array=["PHP","JavaScript","Python" , "HTML"];
echo "<br>Programming Languages: <b>".$array[0].", ".$array[1].", ".$array[2].", ".$array[3]."</b>";

//null: A special value that represents no value. Example: null
$num = NULL;
echo $num; 
?>