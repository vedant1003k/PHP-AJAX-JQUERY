<?php
// Set the name of the cookie
$cookie_name = "last_visit";

// Check if the cookie exists
if (isset($_COOKIE[$cookie_name])) {
    // Retrieve the value of the cookie
    $last_visit = $_COOKIE[$cookie_name];
    echo "Last visited on: " . $last_visit;
} else {
    echo "This is your first visit.";
}

// Set the cookie with the current date-time
$current_time = date("Y-m-d H:i:s");
setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<!DOCTYPE html>
<html>

<head>
    <title>Last Visit</title>
</head>

<body>
    <h1>Welcome to Our Website</h1>
    <p>
        <?php
        if (isset($last_visit)) {
            echo "Last visited on: " . $last_visit;
        } else {
            echo "This is your first visit.";
        }
        ?>
    </p>
</body>

</html>