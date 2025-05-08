<?php

// Define the number to check
$number = -4;

// Check if the number is positive or negative
if ($number > 0) {
    $sign = "Positive";
} elseif ($number < 0) {
    $sign = "Negative";
} else {
    $sign = "Zero";
}

// Check if the number is even or odd
if ($number % 2 == 0) {
    $parity = "Even";
} else {
    $parity = "Odd";
}

// Output the result
echo "The number {$number} is {$sign} and {$parity}.";

?>