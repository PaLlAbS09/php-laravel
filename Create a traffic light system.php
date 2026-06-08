<?php
//create a traffic light system
$light = "green";
switch ($light) {
    case "red":
        echo "Stop";
        break;

    case "yellow":
        echo "Ready";
        break;

    case "green":
        echo "Go";
        break;

    default:
        echo "Invalid traffic light color";
        break;
}

?>