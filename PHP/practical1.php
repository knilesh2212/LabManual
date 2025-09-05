<!-- Practical 01 (A) -->
<?php
echo "Welcome to PHP Programming!<br>";
?>


<!-- Practical 01 (B) -->

<?php
$a = 10; $b = 5;

// Arithmetic Operators
echo "Arithmetic:<br>";
echo "$a + $b = ".($a+$b)."<br>";
echo "$a - $b = ".($a-$b)."<br>";
echo "$a * $b = ".($a*$b)."<br>";
echo "$a / $b = ".($a/$b)."<br>";
echo "$a % $b = ".($a%$b)."<br><br>";

// Comparison Operators
echo "Comparison:<br>";
echo "Equal? ".var_export($a==$b,true)."<br>";
echo "Not Equal? ".var_export($a!=$b,true)."<br>";
echo "Greater? ".var_export($a>$b,true)."<br>";
echo "Less/Equal? ".var_export($a<=$b,true)."<br><br>";

// Logical Operators
echo "Logical:<br>";
echo "Both > 0? ".var_export(($a>0)&&($b>0),true)."<br>";
echo "Any > 0? ".var_export(($a>0)||($b<0),true)."<br>";
echo "Not > 0? ".var_export(!($a>0),true)."<br><br>";

// Bitwise Operators
echo "Bitwise:<br>";
echo "$a & $b = ".($a & $b)."<br>";
echo "$a | $b = ".($a | $b)."<br>";
echo "$a ^ $b = ".($a ^ $b)."<br>";
echo "$a << 1 = ".($a << 1)."<br>";
echo "$a >> 1 = ".($a >> 1)."<br>";
?>