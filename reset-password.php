<?php
require_once 'db.php';
session_start();

if (isset($_POST['resetpassword'])) {
     $firstName = trim($_POST['firstName']);
     $password = trim($_POST['password']);
     $email = trim($_POST['email']);

     $sql = "SELECT email FROM users WHERE email =  ?";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location:reset-password.php?error=sqlerror");
          exit();
     } else {
          mysqli_stmt_bind_param($stmt, "s", $email);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($result)) {
               // header("Location:index.php?error=usernameTaken");
               if ($firstName == $row['firstName']) {
                    # code...
                    $sql = "UPDATE users SET password = ? WHERE email = ?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                         header("Location:reset-password.php?error=sqlerror");
                         exit();
                    } else {
                         $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                         // Bind parameters and execute the statement
                         mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $email);
                         if (mysqli_stmt_execute($stmt)) {
                              // Password successfully updated
                              $_SESSION['error'] = 1;
                              $_SESSION['errorMassage'] = "Password reset successfully";
                              header("Location:index.php");
                              exit();
                         } else {
                              // Handle the case where the password update fails
                              header("Location: reset-password.php?error=updatefailed");
                              exit();
                         }
                    }
               } else {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = "First name do not match user";
                    header("Location:reset-password.php");
                    exit();
               }
          } else {
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = "User not found";
               header("Location:reset-password.php");
               exit();
          }
     }
}
?>
<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- my stylesheet -->
     <link rel="stylesheet" href="res/mycss/style.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="res/mycss/global-style.css?v=<?php echo time(); ?>">
     <!-- fontawasome -->
     <link rel="stylesheet" href="res/fontawesome-free-6.0.0-web/css/all.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="shortcut icon" href="/favicon.ico" />
     <!-- Primary Meta Tags -->
     <title>Airships investment - Secure Your Finances And Investments For The Future</title>
     <meta name="title" content="Airships investment - Secure Your Finances And Investments For The Future">
     <meta name="description" content="Airsips investment is an international financial management company engaged in investment activities, which are related to trading on financial markets and aeronautic and marine commodities exchanges performed by qualified professional traders. ">

     <!-- Open Graph / Facebook -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://meships.top/">
     <meta property="og:title" content="Airships investment - Secure Your Finances And Investments For The Future">
     <meta property="og:description" content="We are an international financial management company engaged in investment activities, which are related to trading on financial markets and aeronautic and marine commodities exchanges performed by qualified professional traders. ">
     <meta property="og:image" content="">

     <!-- Twitter -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://meships.top/">
     <meta property="twitter:title" content="Airships investment - Secure Your Finances And Investments For The Future">
     <meta property="twitter:description" content="We are an international financial management company engaged in investment activities, which are related to trading on financial markets and aeronautic and marine commodities exchanges performed by qualified professional traders. ">
     <meta property="twitter:image" content="">
     <meta name="google-site-verification" content="jS4HyiKQE25431OaCPEJRpWwuAPyVHS48zS88bgKXbk" />
     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5B62KFW6M"></script>
     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'G-T5B62KFW6M');
     </script>
</head>

<body>

     <!-- My navbar  -->
     <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-dark p-1 fixed-top" id="navbar-example2">
               <div class="container-fluid ">
                    <a class="navbar-brand" href="#">
                         <img src="res/img/airship.jpeg" alt="" width="70" height="64">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#scrollspyHeading1">About</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#scrollspyPlan">Plan</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#scrollspytrust">feature</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#scrollspyFaq">Faq</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#scrollspypay">Gateway</a>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link" href="#">Contact</a>
                              </li>
                         </ul>
                         <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                              <li class="nav-item">
                                   <button class="btn btn-success" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign In</button>
                              </li>
                              <li class="nav-item text-uppercase">
                                   <a class="nav-link sign-up" data-bs-toggle="modal" data-bs-target="#exampleModal2">sign up</a>
                              </li>
                              <li class="nav-item dropdown text-uppercase">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                   </a>
                                   <ul class="dropdown-menu text-uppercase" aria-labelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="#">Hindi</a></li>
                                        <li>
                                             <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Franch</a></li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>

     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
               <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
          </symbol>
          <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
               <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
          </symbol>
          <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
               <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </symbol>
     </svg>

     <div class="container pt-5 mt-5">
          <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
               <div class="container position-relative">
                    <div class="alert alert-danger d-flex align-items-center position-absolute top-0 end-0 " id="alertActivation" role="alert">
                         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                              <use xlink:href="#check-circle-fill" />
                         </svg>
                         <div>
                              <?php echo $_SESSION['errorMassage']; ?>
                              <?php $_SESSION['error'] = 0   ?>
                         </div>
                    </div>
               </div>
          <?php } ?>
          <form action="" method="post" name="resetpasswordFrom" class="mx-auto">
               <div class="card text-center mt-5">
                    <div class="card-header">
                         Reset your password here
                    </div>
                    <div class="card-body">
                         <h5 class="card-title">Please enter the correct credentials to successfully change your password</h5>

                         <div class="row g-3 align-items-center">
                              <div class="col-lg-12">
                                   <label for="inputPassword6" class="col-form-label">Password Reset</label>
                              </div>
                              <div class="col-lg-12">
                                   <input type="email" id="" name="email" id="otpCode" class="form-control" aria-describedby="passwordHelpInline" placeholder="Enter Email">
                                   <input type="password" id="" name="password" id="otpCode" class="form-control mt-3" aria-describedby="passwordHelpInline" placeholder="Enter New Password">
                                   <input type="text" id="inputPassword6" name="firstName" id="otpCode" class="form-control mt-3" aria-describedby="passwordHelpInline" placeholder="Enter Your First Name">
                              </div>
                              <div class="col-lg-12">
                                   <span id="passwordHelpInline" class="form-text">
                                        Confirm its your account by entering your first name
                                   </span><br>
                                   <button type="submit" class="btn btn-primary mt-5" name="resetpassword">Reset</button>
                              </div>
                         </div>
                    </div>
                    <div class="card-footer text-muted">
                         Welcome
                    </div>
               </div>
          </form>
     </div>


     <?php
     require_once "footer.php";
