<?php
// Create connection
$cn = mysqli_connect("localhost", "root", "","scheduler");


// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>