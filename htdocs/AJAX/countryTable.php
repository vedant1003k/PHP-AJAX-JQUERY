<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db";
$link = mysqli_connect($server, $username, $password, $database);
// $sql = "create database db";
// $sql = "create table USA(id int(4) auto_increment primary key,state varchar(50))";
// $sql = "Select * from tab1";
// print_r($_POST);
$data = "insert into USA(state) values('New York')";
if ($link) {
    echo "connected";
} else {
    echo "Error";
}
// mysqli_query($link, $sql);
echo "<br>";
if (mysqli_query($link, $data)) { //(connection,query)
    echo "Inserted";
} else {
    echo mysqli_error($link);
}
