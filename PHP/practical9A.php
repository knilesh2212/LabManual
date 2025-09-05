<!-- Practical 09 (A) -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello (POST): $name <br>";
}

if (isset($_GET['name'])) {
    echo "Hello (GET): " . $_GET['name'] . "<br>";
}

echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
?>
<hr>
<form method="post">
    Enter Name (POST): <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
<hr>
<a href="practical9A.php?name=John">Click for GET Example</a>