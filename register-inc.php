<?php
require_once 'db.php';
$response = [];
if (isset($_POST['submitRegister'])) {
     $firstName = trim($_POST['firstName']);
     $lastName = trim($_POST['lastName']);
     $email = trim($_POST['email']);
     $phone = trim($_POST['phone']);
     $pass = $_POST['pass'];
     $isVerified = 0;
     $accBalance = 0.0;
     $otp = rand(10000, 99999);


     $sql = "SELECT email FROM users WHERE email =  ?";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location:index.php?error=sqlerror");
          exit();
     } else {
          mysqli_stmt_bind_param($stmt, "s", $email);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $rowCount = mysqli_stmt_num_rows($stmt);

          if ($rowCount > 0) {
               header("Location:index.php?error=usernameTaken");
               $response = array(
                    "status" => "alert-success",
                    "message" => "Email already exist."
               );
               exit();
          } else {
               $sql = " INSERT INTO users (firstName,lastName,phone,password,email,verified,balance,otp) VALUES (?, ?,?, ?, ?,?,?,?)";
               $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:register-inc.php?error=sqlerror");
                    exit();
               } else {
                    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $phone, $hashedPass, $email, $isVerified, $accBalance, $otp);
                    mysqli_stmt_execute($stmt);

                    $sql = "SELECT * FROM users WHERE email = ?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                         header("Location:index.php?error=sqlerror");
                         exit();
                    } else {
                         mysqli_stmt_bind_param($stmt, "s", $email);
                         mysqli_stmt_execute($stmt);
                         $result = mysqli_stmt_get_result($stmt);
                         if ($row = mysqli_fetch_assoc($result)) {
                              session_start();
                              $_SESSION['auth'] = true;
                              $_SESSION['start'] = time();
                              $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                              $_SESSION['email'] = $row['email'];
                              $_SESSION['verified'] = $row['verified'];
                              $_SESSION['firstName'] = $row['firstName'];
                              $_SESSION['lastName'] = $row['lastName'];
                              $_SESSION['otpCode'] = $row['otp'];
                              header("Location:dashbord.php?success=registered");
                              exit();
                         }
                    }
               }
          }
     };
};
