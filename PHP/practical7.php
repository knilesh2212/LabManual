<!-- Practical 07 (A) -->
<?php
$str = "Hello PHP";

echo "Original String: $str<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Substring (0-5): " . substr($str, 0, 5) . "<br>";
echo "<br><br>";
?>



<!-- Practical 07 (B) -->
<?php
date_default_timezone_set("Asia/Kolkata"); // Set timezone
echo "Current Date: " . date("d-m-Y") . "<br>";
echo "Current Time: " . date("h:i:s A") . "<br>";
?>