<!DOCTYPE html>
<html>

<head>
    <title>Form Processing</title>
</head>

<body>
    <h2>User Input Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];

        echo "<h3>User Input:</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }
    ?>
</body>

</html>