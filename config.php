<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "crowd_monitor";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>