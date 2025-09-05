<!-- Practical 06 (A) -->

<?php
// User-defined function to add two numbers
function addNumbers($x, $y)
{
    return $x + $y;
}

$a = 10;
$b = 20;
$sum = addNumbers($a, $b);

echo "The sum of $a and $b is: $sum";
echo "<br><br>";
?>

<!-- Practical 06 (B) -->
<?php
$day = 3; // 1 = Monday, 2 = Tuesday, etc.

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number!";
}
?>