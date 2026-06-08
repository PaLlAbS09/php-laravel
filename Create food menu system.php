<?php
//Create food menu system.
$food = "pizza";

switch ($food) {
    case "pizza":
        echo "You selected Pizza";
        break;
    case "burger":
        echo "You selected Burger";
        break;
    case "pasta":
        echo "You selected Pasta";
        break;
    case "sandwich":
        echo "You selected Sandwich";
        break;

    case "chicken":
        echo "You selected Chicken";
        break;

    default:
        echo "Food not available";
        break;
}
?>