<!-- Practical 09 (B) -->

<?php
if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size'];

    // Move file to uploads folder
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $fileName);

    echo "File Uploaded Successfully!<br>";
    echo "File Name: $fileName<br>";
    echo "File Type: $fileType<br>";
    echo "File Size: " . ($fileSize / 1024) . " KB<br>";
}
?>
<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="file">
    <input type="submit" value="Upload">
</form>