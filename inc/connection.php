<?php
    // Create a database connection
    $dbhost = "localhost";
    $dbuser = "web";
    $dbpass = "movieclub";
    $dbname = "movie_club";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Test if connection occurred
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>