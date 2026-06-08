<?php
$num1 = 10;
$num2 = 5;  
$operation = "*";

switch ($operation) {
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        echo $num1 / $num2;
        break;
    default:
        echo "error";
        break;
}
?>