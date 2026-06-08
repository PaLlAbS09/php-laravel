
<?php
//calculate madhyamik result grade using switch case
$result = 46; 

switch ($result) {
    case ($result < 30):
        echo "Fail";
        break;

    case ($result > 30 && $result <= 45):
        echo "C";
        break;

    case ($result > 45 && $result <= 60):
        echo "B";
        break;

    case ($result > 60 && $result < 80):
        echo "A";
        break;

    case ($result >= 80 && $result < 90):
        echo "A+";
        break;

    case ($result >= 90 && $result <= 100):
        echo "A++";
        break;

    default:
        echo "Invalid ROLL NUMBER";
        break;

}

?>
