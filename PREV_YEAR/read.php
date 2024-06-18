<!-- Ways to read file -->

<?php $myfile = fopen("1.txt", "r") or
    die("Unable to open file!");
echo fread($myfile, filesize("1.txt"));
fclose($myfile);

echo "<br>";

// echo readfile("1.txt");
