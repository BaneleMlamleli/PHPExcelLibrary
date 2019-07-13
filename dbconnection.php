<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "usermodule");

// Check connection
if ($conn->connect_error) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<script>alert('No database connection established') </script>";
}

echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;
