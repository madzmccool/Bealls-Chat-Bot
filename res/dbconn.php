<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "admin";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>