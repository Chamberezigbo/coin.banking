<?php
session_start();
if (isset($_GET['ref'])) {
     # code...
     $_SESSION['referralLink'] = $_GET['ref'];
} else {
     $_SESSION['referralLink'] = NULL;
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