<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "online_banking";

// $dbHost = "localhost";
// $dbUser = "meshipst_online_banking";
// $dbPass = "online_banking";
// $dbName = "meshipst_online_banking";


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}
