<?php
$con = mysqli_connect("localhost", "root", "", "user");
var_dump($con);
if(!$con){
    echo mysqli_error();
    echo "<script>alert('No database connection established') </script>";
}
