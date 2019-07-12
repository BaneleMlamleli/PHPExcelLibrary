<?php
$con = mysqli_connect("localhost", "root", "", "user");
if(!$con){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<script>alert('No database connection established') </script>";
}

echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
