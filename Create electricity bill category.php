<?php
//Create electricity bill category.
$type = "residential";

switch ($type)
{
    case "residential":
        echo "Electricity bill for Residential category";
        break;
    case "commercial":
        echo "Electricity bill for Commercial category";
        break;
    case "industrial":
        echo "Electricity bill for Industrial category";
        break;
    default:
        echo "Invalid category";
        break;
}
?>