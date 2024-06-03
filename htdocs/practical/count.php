<?php
// Start the session
session_start();

// Check if the page views count is already set in the session
if (isset($_SESSION['page_views'])) {
    // Increment the page views count
    $_SESSION['page_views'] += 1;
} else {
    // Initialize the page views count to 1
    $_SESSION['page_views'] = 1;
}

// Display the page views count
$page_views = $_SESSION['page_views'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Views Counter</title>
</head>

<body>
    <h1>Welcome to Our Website</h1>
    <p>You have visited this page <?php echo $page_views; ?> times.</p>
</body>

</html>