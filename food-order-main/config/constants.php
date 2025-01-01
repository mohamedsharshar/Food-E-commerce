<?php 
    // Start the session
    session_start();

    // Define constants for non-repeating values
    define('SITEURL', 'http://localhost/food-order-main/');
    define('DB_HOST', 'localhost'); // Changed from LOCALHOST to DB_HOST for clarity
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');
    
    // Connect to the database
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Select the database
    $db_select = mysqli_select_db($conn, DB_NAME);
    if (!$db_select) {
        die("Database selection failed: " . mysqli_error($conn));
    }
?>
