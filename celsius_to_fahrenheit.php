<?php
// Question:write a PHP script to convert a temparature of 32 degrees Celsius to fahrenheit. Store just the temparature value in a variable, no need to store the unit(celsius). Print the result using the printf function to show upto 2 decimal points.
$celsius = 32;

$fahrenheit = ($celsius * 9 / 5) + 32;

printf("%s degrees Celsius is equal to %.2f degrees Fahrenheit.", $celsius, $fahrenheit);
