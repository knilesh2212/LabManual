<!-- Practical 04 (A) -->
<?php
$a = 15; 
$b = 25; 
$c = 10;

$max = $a;

if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}

echo "The maximum number among $a, $b, and $c is: $max";

echo "<br><br>";
?>



<!-- Practical 04 (B) -->
 
<?php
$num = 5; 
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}

echo "Factorial of $num is: $fact";
?>