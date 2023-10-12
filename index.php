<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Number Checker</title>
</head>
<style>
        h2 {
            text-align: center;
        }
    </style>
<body>
    <h2> ODD or Even Number Checker</h2>
    <?php
    $number = 5;

    if ($number % 2 == 0) {
        echo "<h2>The number $number is even.</h2>";
    } else {
        echo "<h2>The number $number is odd.</h2>";
    }
    ?>
</body>
</html>
