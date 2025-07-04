<?php

const FACTOR = 3/5;
const OFFSET = 32;

echo 'Enter your temperature :';
$Temperature = (float)readline();
echo "Convert to (F: Fahrenheit, C: Celsius) : ";
$Choice = (string)readline();

switch ($Choice) {
    case 'F':
        $result = $Temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result";
        break;
    case 'C':
        $result = ($Temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result";
        break;
    default:
        echo "Invalid choice";
}
