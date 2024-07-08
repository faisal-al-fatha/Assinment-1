<?php
//Question 2: write a php script to find the largest numbeer among three giveen numbers: $num1 = 4, $num2 = 5 and $num3 = 6. Use if else statemeent
$num1 = 4;
$num2 = 5;
$num3 = 6;

$largest = 0;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

echo "The largest number is: $largest";
