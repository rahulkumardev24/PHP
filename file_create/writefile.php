<?php
// File Name (with folder path)
$filename = "myFiles/dummy.txt";

// File Content to be written inside the file
$content = "This is a dummy file created with the help of PHP";

// Try to open the file in write mode
$file = fopen($filename, "w");

if ($file) {
    // If file opened successfully, write content into it
    fwrite($file, $content);

    // Close the file after writing
    fclose($file);

    echo "File created successfully!";
} else {
    // If file could not be opened or created
    echo "Unable to create file. Please check folder permissions.";
}
?>




