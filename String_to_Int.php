<?php

// Convert String to Int value (abs)
echo "Convert String to Int value:", "<br>";
$s_value = "123A23.43";
$Int_value = (int)$s_value;

echo "Here, Value = ", $s_value, "<br>";
echo "Method 1: ", $Int_value, "<br>";
echo "Method 2: ", (int)$s_value;

?>
