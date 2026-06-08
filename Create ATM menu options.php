<?php
//Create ATM menu options.
$option = 2;

switch ($option) {
    case 1:
        echo "Check Balance";
        break;
    case 2:
        echo "Withdraw Money";
        break;
    case 3:
        echo "Deposit Money";
        break;
    case 4:
        echo "Change PIN";
        break;
    case 5:
        echo "mini statement";
        break;
    case 6:
        echo "Fund Transfer";
        break;
        
    default:
        echo "Exit";
        break;
}

?>
