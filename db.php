<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "online_banking";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}
