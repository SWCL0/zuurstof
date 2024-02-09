<?php

echo "Cilinderinhoud (liter): " . PHP_EOL;
$cilinderinhoud = readline();

echo "Druk op de manometer (bar): " . PHP_EOL;
$bar = readline();

echo "Benodigd aantal liter zuurstof per minuut: " . PHP_EOL;
$zuurtstof = readline();

$output = ($cilinderinhoud * $bar) / $zuurtstof;
echo "De patiënt kan de fles nog $output minuten gebruiken!";

?>