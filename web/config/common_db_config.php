<?php

    // configure your database connection here:
    define('DB_SERVER',"diskstation");
    define('DB_NAME',"iSpindel");
    define('DB_USER',"iSpindel");
    define('DB_PASSWORD',"iSpindel");
    define('DB_PORT',"3306");

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }

    define("defaultTimePeriod", 24);    // Timeframe for chart (backwards from now)
    define("defaultReset",  false);     // Flag for Timeframe Start (beginning of chart display)
    define("defaultDaysAgo", 7);        // Default number of days past to look for active iSpindels
?>

