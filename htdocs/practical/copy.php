<?php
// Define the file path
$file_path = "example.txt";

// Text to be inserted into the file
$text_to_insert = "Vedant.";

// Open the file for writing (creates the file if it doesn't exist)
$file_handle = fopen($file_path, "w");

// Check if the file is opened successfully
if ($file_handle) {
    // Write the text to the file
    fwrite($file_handle, $text_to_insert);

    // Close the file
    fclose($file_handle);
} else {
    echo "Failed to open the file for writing.";
    exit();
}

// Read the text from the file
$text_from_file = file_get_contents($file_path);

// Check if the text was read successfully
if ($text_from_file === false) {
    echo "Failed to read the file.";
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Read and Write Text File</title>
</head>

<body>
    <h1>Text from the File</h1>
    <p><?php echo $text_from_file; ?></p>
</body>

</html>