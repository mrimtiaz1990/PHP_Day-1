<?php

// Convert round value (round)
echo "Convert round value:", "<br>";

$a_value1 = 123.60;
$a_value2 = 0.519;
$na_value = 0.49;

echo "Here, Value-1 = ", $a_value1, " & <br> Value-2 = ", $a_value2, " & <br> N/A Value = ", $na_value, "<br><br>";
echo "Value-1 = ", round($a_value1), "<br>";
echo "Value-2 = ", round($a_value2), "<br>";
echo "N/A Value = ", round($na_value);

?>
