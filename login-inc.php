<?php

if (isset($_POST['login'])) {
     require 'db.php';
     $email = trim($_POST['email']);
     $password = $_POST['logPassword'];

     $sql = "SELECT * FROM users WHERE email = ?";
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt, $sql)) {
          session_start();
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
                    session_start();
                    $_SESSION['auth'] = true;
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                    $_SESSION['error'] = 0;
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['verified'] = $row['verified'];
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['otpCode'] = $row['otp'];

                    header("Location:dashbord.php");
               } else {
                    session_start();
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Invalid password.";
                    header("Location:index.php");
               }
          } else {
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Email or password not valid";
               header("Location:index.php");
          }



     }
}
