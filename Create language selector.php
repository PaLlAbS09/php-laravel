<?php
//Create language selector.
$languge = "english";
switch ($languge) {
    case "english":
        echo "Hello";
        break;
    case "bengali":
        echo "nomoskar";
        break;
    case "hindi":
        echo "Namaste";
        break;
    case "french":
        echo "Bonjour";
        break;
    case "german":
        echo "Hallo";
        break;
    case "italian":
        echo "Ciao";
        break;
    default:
        echo "Language not supported";
        break;
}


?>