<?php
// Get the file parameter from the URL
$file = $_GET['file'];

// Path to the files directory
$path = '/home/site/wwwroot/uploads/' . $file;

// Check if the file exists
if (file_exists($path)) {
    // Send the file to the browser
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    readfile($path);
} else {
    echo 'TryMoreThings....';
}
?>
