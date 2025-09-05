<!-- Practical 05 (A) -->
<?php
$num = 5; // change number as needed

echo "Multiplication Table of $num:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}

echo "<br><br>";

?>

<!-- Practical 05 (B) -->

<?php
$n = 5; // number of lines

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>