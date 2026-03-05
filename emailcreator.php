<?php

$first = $_POST["firstName"];
$last = $_POST["lastName"];
$dateOfBirth = $_POST["dateOfBirth"];
$department = $_POST["department"];

$year = date("Y");

$yearLastTwoDigits = substr($year, -2);
$firstPart = substr($first, 0, 4);
$lastPart = substr($last, 0, 4);

$email = strtolower($department."_".$firstPart. $lastPart.$yearLastTwoDigits."@jbu.edu");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Email Created</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>
    <body>
        <h1>Email Created!</h1>
        <p>Student Name: <?php echo $first . " " . $last; ?></p>
        <p>Department: <?php echo strtoupper($department); ?></p>
        <p>Date of Birth: <?php echo $dateOfBirth; ?></p>
        <p>Your email address is: <?php echo $email; ?></p>
    </body>
</html>