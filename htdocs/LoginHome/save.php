<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "db";

// data base and tabel with connect should be their if not make that 


$conn = mysqli_connect($server, $username, $password, $database);
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM user WHERE username = '$email' AND password = '$pass' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // $_SESSION[''] = $row['id'];
    // echo $row['id'];
    $_SESSION['name'] = $row['username'];

    header("location: homePage.php");
} else {
    header("location: login_err.html");
}
