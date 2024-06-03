<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db";
$conn = mysqli_connect($server, $username, $password, $db);
$roll = $_REQUEST['roll'];
if ($roll == '')
    echo 'Data Not Found';
else {
    $sql = "SELECT * FROM student WHERE rollno = $roll";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $found = false;
        while ($row = mysqli_fetch_assoc($res)) {
            $found = true;
            echo "Roll No- " . $row['rollno'];
            echo "<br>";
            echo " Name- " . $row['name'];
            echo "<br>";
            echo "<br>";
        }
        if (!$found) {
            echo "No data found for Roll No: " . $roll;
        }
    } else {
        echo "Underflow";
    }
}
