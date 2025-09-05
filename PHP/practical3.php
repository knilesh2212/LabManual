<!-- Practical 03 (A) -->
<?php
$n = 10;
$a = 0; 
$b = 1;

echo "Fibonacci Series: <br>";
for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

echo "<br><br>";
?>

<!-- Practical 03 (B) -->

<?php
$marks = [85, 78, 92, 74, 88]; // marks in 5 subjects
$total = array_sum($marks);
$percentage = $total / count($marks);

echo "Total Marks: $total<br>";
echo "Percentage: $percentage%<br>";

if ($percentage >= 90) {
    $grade = "A+";
} elseif ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} else {
    $grade = "Fail";
}

echo "Grade: $grade";
?>