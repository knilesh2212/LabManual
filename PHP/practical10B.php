<?php

setcookie("user", "Nilesh", time() + (86400 * 7), "/");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cookie Example</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "Cookie Value: " . $_COOKIE["user"];
    } else {
        echo "Cookie is not set yet. Refresh the page to see it.";
    }
    ?>
</body>

</html>