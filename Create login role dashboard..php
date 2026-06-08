<?php
//Create login role dashboard.
$role = "admin";
switch ($role) 
{
    case "admin":
        echo "greetings Admin!";
        break;
    case "editor":
        echo "greetings Editor!";
        break;
    case "viewer":
        echo "greetings Viewer!";
        break;
    default:
        echo "access denied";
        break;
}  
 
?>