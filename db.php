<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "online_banking";

// $dbHost = "localhost";
// $dbUser = "airships_user1";
// $dbPass = "nmesoma5050";
// $dbName = "airships_online_banking";


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}
