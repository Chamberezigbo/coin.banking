<?php
require_once 'db.php';
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
               // header("Location:index.php?error=usernameTaken");
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Email has been taken";
               header("Location:index.php");
               exit();
          } else {
               $sql = " INSERT INTO users (firstName,lastName,phone,password,email,verified,balance,otp) VALUES (?, ?,?, ?, ?,?,?,?)";
               $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Error occurred with your login";
                    header("Location:index.php");
                    exit();
               } else {
                    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
                    // section for sending mail //
                    $subject = "Verification Code From Airships investment";
                    $massage = "";
                    $headers = "From: Airships\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset-ISO-8859-1\r\n";

                    $message = "<html>
                         <body>
                                   <h1 style=\"text-align: center;\">
                                        Confirm Your Email Address
                                   </h1>
                                   <p style=\"text-align: center; font-size:20px;\">
                                        copy and paste the code to activate your account <span><a href=\"#\"style=\"color: red;\"><?php=$otp; ?></a></span>
                                   </p>
                                   <p style=\"text-align: center;\">
                                        You received this email because we received a request form Airships investment  to your account. If you didn't request registration you can safely delete this email.
                                   </p>
                         </body>
                    </html>
                    ";

                    if (mail($email, $subject, $massage, $headers)) {
                         mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $phone, $hashedPass, $email, $isVerified, $accBalance, $otp);
                         mysqli_stmt_execute($stmt);

                         $sql = "SELECT * FROM users WHERE email = ?";
                         $stmt = mysqli_stmt_init($conn);
                         if (!mysqli_stmt_prepare($stmt, $sql)) {
                              $_SESSION['error'] = 1;
                              $_SESSION['errorMassage'] = " Error occurred with your login try login in";
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
                                   $_SESSION['error'] = 0;

                                   $_SESSION['email'] = $row['email'];
                                   $_SESSION['verified'] = $row['verified'];
                                   $_SESSION['firstName'] = $row['firstName'];
                                   $_SESSION['lastName'] = $row['lastName'];
                                   $_SESSION['otpCode'] = $row['otp'];
                                   header("Location:dashbord.php?success=registered");
                                   exit();
                              }
                         }
                    } else {
                         session_start();
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Email not sent";
                         header("Location:index.php");
                         exit();
                    }

                   
               }
          }
     };
};
