<?php
session_start();
//admin@meships.top
//nDP^aplODB%K

require_once 'db.php';

//require mail.php
require 'core/mail.php';

if (isset($_POST['submitRegister'])) {
     $firstName = trim($_POST['firstName']);
     $lastName = trim($_POST['lastName']);
     $email = trim($_POST['email']);
     $phone = trim($_POST['phone']);
     $pass = $_POST['pass'];
     $isVerified = 0;
     $accBalance = "0";
     $otp = rand(10000, 99999);
     $ref = $_SESSION['referralLink'];

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
               $sql = " INSERT INTO users (firstName,lastName,phone,password,email,verified,balance,otp,referral) VALUES (?, ?,?, ?, ?,?,?,?,?)";
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
                    /*
                    $message = "";
                    $headers = "From:  Airships investment <airdrop.top>\r\n";
                    $headers .= 'To: Name <' . $email . '>';
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    ob_start();
                    include("email.php");
                    $message = ob_get_contents();
                    ob_end_clean();
                    */

                    // $message =
                    // '<html>
                    //      <body>
                    //           <h1 style="text-align: center;">
                    //                Confirm Your Email Address
                    //           </h1>
                    //           <p style="text-align: center; font-size:20px;">
                    //                copy and paste the code to activate your account <span><a href="#" style="color: red;"></a></span>. $otp
                    //           </p>
                    //           <p style="text-align: center;">
                    //                You received this email because we received a request form Airships investment to your account. If you didnt request registration you can safely delete this email.
                    //           </p>
                    //      </body

                    // </html>
                    // ';

                    if (sendMail($email, $firstName, $subject, str_replace('<?= $otp; ?>', $otp, file_get_contents("email.php")))) {
                         mysqli_stmt_bind_param($stmt, "sssssssss", $firstName, $lastName, $phone, $hashedPass, $email, $isVerified, $accBalance, $otp, $ref);
                         mysqli_stmt_execute($stmt);

                         $sql = "SELECT * FROM users WHERE email = ?";
                         $stmt = mysqli_stmt_init($conn);
                         if (!mysqli_stmt_prepare($stmt, $sql)) {
                              $_SESSION['error'] = 1;
                              $_SESSION['errorMassage'] = " Error occurred with your login try login in";
                              header("Location:index.php");
                              exit();
                         } else {
                              mysqli_stmt_bind_param($stmt, "s", $email);
                              mysqli_stmt_execute($stmt);
                              $result = mysqli_stmt_get_result($stmt);
                              if ($row = mysqli_fetch_assoc($result)) {
                                   $_SESSION['auth'] = true;
                                   $_SESSION['start'] = time();
                                   $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                                   $_SESSION['error'] = 0;

                                   $_SESSION['email'] = $row['email'];
                                   $_SESSION['verified'] = $row['verified'];
                                   $_SESSION['firstName'] = $row['firstName'];
                                   $_SESSION['lastName'] = $row['lastName'];
                                   $_SESSION['balance'] = $row['balance'];
                                   $_SESSION['otpCode'] = $row['otp'];
                                   $_SESSION['referral'] = $row['referral'];
                                   header("Location:dashbord.php");
                                   exit();
                              }
                         }
                    } else {
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Email not sent";
                         header("Location:index.php");
                         exit();
                    }
               }
          }
     };
};
