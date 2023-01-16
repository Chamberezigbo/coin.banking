<?php
session_start();
if (isset($_POST['login'])) {
     require 'db.php';
     $email = trim($_POST['email']);
     $password = $_POST['logPassword'];

     if ($email == "admin@mail.com" && $password == "admin12345") {
          header("location:admin.php");
     } else {
          $sql = "SELECT * FROM users WHERE email = ?";
          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Error occurred with your login";
               header("Location:index.php");
               exit();
          } else {
               mysqli_stmt_bind_param($stmt, "s", $email);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               if ($row = mysqli_fetch_assoc($result)) {
                    if (password_verify($password, $row['password'])) {
                         $_SESSION['auth'] = true;
                         $_SESSION['start'] = time();
                         $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                         $_SESSION['error'] = 0;
                         $_SESSION['sessionId'] = $row['id'];
                         $_SESSION['verified'] = $row['verified'];
                         $_SESSION['firstName'] = $row['firstName'];
                         $_SESSION['lastName'] = $row['lastName'];
                         $_SESSION['balance'] = $row['balance'];
                         $_SESSION['otpCode'] = $row['otp'];
                         $_SESSION['email'] = $row['email'];
                         $_SESSION['referral'] = $row['referral'];

                         header("Location:dashbord.php");
                    } else {
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Invalid password.";
                         header("Location:index.php");
                    }
               } else {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Email or password not valid";
                    header("Location:index.php");
               }
          }
     }
}
