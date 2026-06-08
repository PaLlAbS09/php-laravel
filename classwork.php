<?php
//associative array using foreach loop and output in the table format using html bootstrap
$names = array("pallab", "pritam", "sourav");
$ages = array(25,  30, 35);
$phones = array("01712345678", "01812345678", "01912345678");
$emails = array("sarkarpallab471@gmail.com", "pritamkundu7@gmail.com", "sourav88@gmail.com");
$cities = array("Burdwan", "Kolkata", "Durgapur");
$addresses = array("123 Main St", "456 Park Ave", "789 Elm St");
$pinCodes = array("713101", "700001", "713201");
$occupations = array("Teacher", "Engineer", "Doctor");
$qualifications = array("MSc", "BTech", "MBBS");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">User Information</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Pincode</th>
                    <th>Occupation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = count($names);
                for ($i = 0; $i < $count; $i++) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($names[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($ages[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($phones[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($emails[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($cities[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($addresses[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($pinCodes[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($occupations[$i]) . "</td>";
                    echo "<td>" . htmlspecialchars($qualifications[$i]) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 
</body>
</html>