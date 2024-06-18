<?php
$user = 'root';
$pass = '';
$db = 'try';
//create connection
$con =  mysqli_connect('localhost', $user, $pass, $db);

if ($con) {
    echo "Connection Established";
} else {
    echo "Connection Failed";
}

$sql = "CREATE TABLE login (email varchar(10) ,name varchar(30))";

if (mysqli_query($con, $sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


$name = $_POST['name'];
$email = $_POST['email'];

// print_r($_POST);

$data = "insert into login(email,name) values('$email','$name')";

echo "<br>";

if (mysqli_query($con, $data)) { //(connection,query)
    echo "name => $name Inserted";
} else {
    echo mysqli_error($con);
}



$sql = "SELECT * FROM login  ";

$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "Email " . $row['email'];
        echo "<br>";
        echo "name " . $row['name'];
    }
} else {
    echo "underflow";
}



// mysqli_close($con);
