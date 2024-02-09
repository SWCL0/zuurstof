<?php

// opvraag cilinderinhoud
echo "Cilinderinhoud (liter): " . PHP_EOL;
$cilinderinhoud = readline();

// opvraag bar
echo "Druk op de manometer (bar): " . PHP_EOL;
$bar = readline();

// opvraag zuurtstof
echo "Benodigd aantal liter zuurstof per minuut: " . PHP_EOL;
$zuurtstof = readline();

// berekenen uitkomst
$output = ($cilinderinhoud * $bar) / $zuurtstof;
echo "De patiënt kan de fles nog $output minuten gebruiken!";

?>