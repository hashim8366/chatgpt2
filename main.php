<?php
// Check if the image file was uploaded
if (isset($_FILES['image'])) {
    // Get the file path
    $image_path = $_FILES['image']['tmp_name'];
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo 'File could not be uploaded.';
        exit;
    }
    // Path to the Tesseract executable
    $tesseract_path = '/usr/bin/tesseract';

    // Run Tesseract on the image
    $output = shell_exec("$tesseract_path $image_path stdout");

    // Print the extracted text
    echo $output;
}
?>
