<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db";
$conn = mysqli_connect($server, $username, $password, $db);
$country = $_REQUEST['country'];
if ($country == '')
    echo 'Data Not Found';
else {
    $sql = "SELECT * FROM $country";
    // echo $country;
    $res = mysqli_query($conn, $sql);
    echo "<select name='countryList' id='country'>";
    if (mysqli_num_rows($res) > 0) {
        $found = false;
        while ($row = mysqli_fetch_assoc($res)) {
            $found = true;
            echo "<option value=" . $row['state'] . ">" . $row['state'] . "</option>"; // Added missing single quotes and closing tag
        }
        if (!$found) {
            echo "No data found for $country";
        }
    } else {
        echo "Underflow";
    }
    echo "</select>";
}
