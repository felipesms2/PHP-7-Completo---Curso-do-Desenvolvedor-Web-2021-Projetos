<?php

$ResultTester = "true" /* yes, string is proposital */ ;
$SonQuantity = 100;

$QuantityValidation = [
    "options" => ["min_range" => 0, "max_range" => 20]
];
if (!filter_var($SonQuantity, FILTER_VALIDATE_INT,
    $QuantityValidation) && $SonQuantity != 0) {
    $ResultTester = "False";
    
}

echo "\n\n" . $ResultTester . "\n\n";


?>