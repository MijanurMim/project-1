<?php

$temperature = 30;         
$convertTo = "Fahrenheit";  

if ($convertTo === "Fahrenheit") {
    
    $converted = ($temperature * 9/5) + 32;
    echo "{$temperature}°C is equal to {$converted}°F";
} elseif ($convertTo === "Celsius") {
   
    $converted = ($temperature - 32) * 5/9;
    echo "{$temperature}°F is equal to {$converted}°C";
} else {
    echo "Invalid conversion type. Please use 'Celsius' or 'Fahrenheit'.";
}

?>
