<!-- Practical 02 (A) -->
<?php
$num = 7;

if ($num % 2 == 0) {
    echo "$num is Even";
} else {
    echo "$num is Odd";
}

echo "<br><br>";

?>


<!-- Practical 02 (B) -->
<?php
$num = 13;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is Prime";
} else {
    echo "$num is Not Prime";
}
?>

