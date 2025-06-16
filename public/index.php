<!DOCTYPE html>
<html>
<head>
    <script src="js/main.js" defer></script> 
</head>
<body>

<?php 
    function addNumbers($x, $y) {
        return $x + $y;
    }

    $numbers = [3, 4, 5];
    $result = 0;

    foreach($numbers as $num) {
        $result = addNumbers($result, $num);
    }

    echo "The total sum is: $result";
?>