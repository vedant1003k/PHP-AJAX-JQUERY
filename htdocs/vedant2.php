<?php

$server = "localhost";
$username = "root";
$password = '';
$db = "try";

$con = mysqli_connect($server, $username, $password, $db);

$sql = "SELECT * FROM login Where name = 'vedant' ";

$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "Email" . $row['email'];
        echo "<br>";
        echo "name" . $row['name'];
    }
} else {
    echo "underflow";
}
