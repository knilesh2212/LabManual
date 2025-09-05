<!-- Practical 08 (A) -->
<?php
$num = -15.7;

echo "Absolute: " . abs($num) . "<br>";
echo "Square Root of 16: " . sqrt(16) . "<br>";
echo "2 power 5: " . pow(2, 5) . "<br>";
echo "Round: " . round($num) . "<br>";
echo "Ceil: " . ceil($num) . "<br>";
echo "Floor: " . floor($num) . "<br>";
echo "<br><br>";
?>

<!-- Practical 08 (B) -->
<?php
$numbers = [5, 2, 9, 1, 7];

sort($numbers); // Ascending order

echo "Sorted Array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
?>