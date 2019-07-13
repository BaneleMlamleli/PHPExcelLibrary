<?php
// Create connection
$con = new mysqli("localhost", "root", "", "usermodule");
// Check connection
if ($con->connect_error) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<script>alert('No database connection established') </script>";
}
