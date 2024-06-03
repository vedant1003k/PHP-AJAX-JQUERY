<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db";
$conn = mysqli_connect($server, $username, $password, $db);

$sql = "SELECT * FROM tab1 WHERE name like '_a%'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "ID- " . $row['id'];
        echo "<br>";
        echo " Name- " . $row['name'];
        echo "<br>";
        echo "<br>";
    }
} else {
    echo "Underflow";
}
