<?php
/*
1: mysqli_connect()
2: mysqli_query()
3: mysqli_connect_error()
4: mysqli_error()
5: mysqli_num_rows()
6: mysqli_fetch_assoc()
7: mysqli_close()
*/

$server = "localhost";
$username = "root";
$password = "";
$database = "db";
$link = mysqli_connect($server, $username, $password, $database);
// $sql = "create database db";
// $sql = "create table student(rollno int(4) primary key,name varchar(50))";
// $sql = "Select * from tab1";
$roll = $_POST['roll'];
$name = $_POST['name'];
// print_r($_POST);
$data = "insert into student(rollno,name) values($roll,'$name')";
if ($link) {
    echo "connected";
} else {
    echo "Error";
}
// mysqli_query($link, $sql);
echo "<br>";
if (mysqli_query($link, $data)) { //(connection,query)
    echo "name => $name Inserted";
} else {
    echo mysqli_error($link);
}
