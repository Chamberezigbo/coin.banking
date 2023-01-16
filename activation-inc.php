<?php
require_once 'db.php';
session_start();

if (isset($_POST['activate'])) {
     $otpCode = trim($_POST['otpCode']);
     $email = $_SESSION['email'];

     $sql = "UPDATE users SET verified=1 WHERE email= '$email' ";

     if (mysqli_query($conn, $sql)) {
          $_SESSION['verified'] = 1;
          header("Location:deposit.php?successful=activated");
          exit();
     } else {
          header("Location:index.php?error=sqlerror");
          echo "Error updating record: " . mysqli_error($conn);
          exit();
     }
};
