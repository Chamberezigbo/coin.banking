<?php
require_once("header.php");
?>

<!-- my background image -->
<div class="container-fluid landing-section">
     <div class="container pt-5">
          <div class="container pt-5">
               <?php if (!empty($response)) { ?>
                    <div class="container position-relative">
                         <div class="alert alert-success d-flex align-items-center position-absolute top-0 end-0 " id="alertActivation" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                   <use xlink:href="#check-circle-fill" />
                              </svg>
                              <div>
                                   <?php echo $response['message']; ?>
                              </div>
                         </div>
                    </div>
               <?php } ?>
               <div class="pt-5 text-center" id="small-screen">
                    <h1 class="display-4 pt-5">
                         <strong> <em>Generate passive income while working towards portfolio diversification </em> </strong>
                    </h1>
                    <p class="pt-1">
                         <em>
                              Access alternative investments opportunities vetted by Coins Max Profit’s experts,<br>
                              across numerous asset classes, such as Art, Commercial, Real Estate and more
                         </em>
                    </p>
               </div>
               <div class="pt-1 text-center">
                    <button type="button" class="btn btn-primary btn-lg ">Warning</button>
               </div>
          </div>
     </div>
</div>

<!-- users section -->
<div class="user-details container-fluid">
     <div class="container text-center  pt-5 pb-5">
          <div class="row p-2 row-cols-1 pt-4 rounded-pill box">

               <div class="col-lg-4  ps-5 eye">
                    <div class="col-sm-12">
                         <i class="fa-solid fa-eye fa-2x bg-green"></i>
                         <div>
                              <span class="display-6 bg-green ">88,00,000</span><br>
                              <p>Total Visitors</p>
                         </div>
                    </div>
               </div>

               <div class="col-lg-4 ">
                    <div class="col-sm-12">
                         <i class="fa-solid fa-trophy fa-2x bg-green"></i>
                         <div>
                              <span class="display-6 bg-green ">98,00,000</span>
                              <p>Winners</p>
                         </div>
                    </div>
               </div>

               <div class="col-lg-4 ">
                    <div class="col-sm-12">
                         <i class="fa-solid fa-users fa-2x bg-green"></i>
                         <div>
                              <span class="display-6 bg-green ">68,00,000</span>
                              <p>Total Users</p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</div>

<!-- about section -->
<!-- ? suppose to handle responsive image  -->
<section class="container-fluid" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
     <div class="aboutSection" id="scrollspyHeading1">
          <div class="container">
               <div class="row row-cols-1 pt-5 pb-4">
                    <div class="col-lg-6 col-sm-12">
                         <div>
                              <h2>
                                   <span class="h5">Welcome Coins Max Profits</span><br>
                                   <em>About Coins Max Profits Investment</em>
                              </h2>
                              <p>
                                   We are an international financial management company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.
                                   Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between
                                   the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.
                              </p>
                         </div>

                         <div class="d-flex pt-5">
                              <span class="iconspan"><i class="fa-solid fa-award fa-4x bg-green"></i></span>
                              <p class="ps-3">
                                   <span class="h5">
                                        <em>Profit Guaranteed</em><br>
                                   </span>
                                   Our With-Profit Guaranteed Fund offers the potential for returns that are higher than those received from a bank or building society average savings account.
                              </p>
                         </div>
                         <div class="d-flex pt-5">
                              <span class="iconspan "><i class="fa-solid fa-gauge-high fa-3x bg-green"></i></span>
                              <p class="ps-3">
                                   <span class="h5">
                                        <em>Fast Online Transfer</em><br>
                                   </span>
                                   Instant and Continuous Transfer System of Funds (FAST) is a service
                              </p>
                         </div>
                         <div class="d-flex pt-5">
                              <span class="iconspan "><i class="fa-solid fa-shield-virus fa-3x bg-green"></i></span>
                              <p class="ps-3">
                                   <span class="h5">
                                        <em>Secure Investments</em><br>
                                   </span>
                                   An income-focused ecosystem that provides access to alternative investments. Invest in asset classes traditionally dominated by hedge funds and the ultra-wealthy.
                              </p>
                         </div>
                    </div>

                    <div class="col-lg-6 pt-5 side-img">
                         <img src="res/img/signal.png" class="img-fluid" alt="..." width="900">
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- investment package -->
<section class="container-fluid" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
     <div class="container py-5 card-package" id="scrollspyPlan">
          <div class="container mb-3">
               <h2 class="text-center text-light">
                    <em>Latest Investment Packages</em>
               </h2>
          </div>
          <div class="row">
               <div class="col-lg-3 mt-5">
                    <div class="card text-light bg-section text-center">
                         <div class="card-style text-dark rounded-3">
                              <h5 class="card-header"><em>BASIC PLAN</em></h5>
                         </div>
                         <div class="card-body bg-card">
                              <h5 class="card-title">$50 - $100</h5>
                              <p class="card-text mt-5">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Return 40.00 %
                              </p>
                              <p class="card-text">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Every Day
                              </p>
                              <p class="card-text">
                                   <i class="fa-solid fa-square-check bg-green"></i> For 3 Times

                              </p>
                              <div class="mt-auto">
                                   <a href="#" class="btn mybtn mt-auto">Invest Now</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3 ml-5 mt-5">
                    <div class="card text-light bg-section text-center ">
                         <div class="card-style text-dark rounded-3">
                              <h5 class="card-header"><em>STANDARD PLAN</em></h5>
                         </div>
                         <div class="card-body bg-card">
                              <h5 class="card-title">$200 - $500</h5>
                              <p class="card-text mt-5">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Return 40.00 %
                              </p>
                              <p class="card-text">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Every Day
                              </p>
                              <p class="card-text">
                                   <i class="fa-solid fa-square-check bg-green"></i> For 3 Times

                              </p>
                              <div class="mt-auto">
                                   <a href="#" class="btn mybtn mt-auto">Invest Now</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3 mt-5">
                    <div class="card text-light bg-section text-center">
                         <div class="card-style text-dark rounded-3">
                              <h5 class="card-header"><em>PREMIUM PLAN</em></h5>
                         </div>
                         <div class="card-body bg-card">
                              <h5 class="card-title">$600 - $1,000</h5>
                              <p class="card-text mt-5">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Return 40.00 %
                              </p>
                              <p class="card-text">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Every Day
                              </p>
                              <p class="card-text">
                                   <i class="fa-solid fa-square-check bg-green"></i> For 3 Times

                              </p>
                              <div class="mt-auto">
                                   <a href="#" class="btn mybtn mt-auto">Invest Now</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3 mt-5">
                    <div class="card text-light bg-section text-center">
                         <div class="card-style text-dark rounded-3">
                              <h5 class="card-header"><em>PROFESSIONAL PLAN</em></h5>
                         </div>
                         <div class="card-body bg-card">
                              <h5 class="card-title">$1,500 - $5,000</h5>
                              <p class="card-text mt-5">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Return 40.00 %
                              </p>
                              <p class="card-text">
                                   <span><i class="fa-solid fa-square-check bg-green"></i></span> Every Day
                              </p>
                              <p class="card-text">
                                   <i class="fa-solid fa-square-check bg-green"></i> For 3 Times

                              </p>
                              <div class="mt-auto">
                                   <a href="#" class="btn mybtn mt-auto">Invest Now</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- how page -->
<section class="container-fluid">
     <div class="container py-5 text-center text-light">
          <div class="container text-center ">
               <h2>How Coins Max Profits Works</h2>
               <p>Get involved in our tremendous platform and Invest. We will utilize your <br>
                    money and give you profit in your wallet automatically. Here's how
                    you <br> can earn with four easy steps
               </p>
          </div>

          <div class="row mt-5">
               <div class="col-lg-3">
                    <span>
                         <img src="res/img/number1.png" class="img-fluid span-num" alt="..." width="133">
                    </span>
                    <h5 class="mt-3"><em>Create an Account</em></h5>
                    <p>Provide Few Required Information About Yourself.</p>
               </div>

               <div class="col-lg-3">
                    <span>
                         <img src="res/img/number2.png" class="img-fluid span-num" alt="..." width="133">
                    </span>
                    <h5 class="mt-3"><em>Deposit Investment Capital</em></h5>
                    <p>Deposit Your Investment Capital Using your prefered payment method</p>
               </div>

               <div class="col-lg-3">
                    <span>
                         <img src="res/img/number3.png" class="img-fluid span-num" alt="..." width="130">
                    </span>
                    <h5 class="mt-3"><em>Invest In A Plan</em></h5>
                    <p>Choose And Invest In Your Prefered Investment Package</p>
               </div>

               <div class="col-lg-3">
                    <span>
                         <img src="res/img/number4.png" class="img-fluid span-num" alt="..." width="130">
                    </span>
                    <h5 class="mt-3"><em>Get Profit</em></h5>
                    <p>Seat Back and watch your investment grow and withdraw profit by the end of each investment package</p>
               </div>
          </div>
     </div>
</section>

<!-- Recent deposit section -->
<section class="container-fluid">
     <div class="container text-center recent-updateSection">
          <div class=" pt-5 text-light">
               <h2><em>Recent Deposit And Withdraw</em></h2>
          </div>
          <div class="container mt-3 mb-3 text-center  ">
               <div class="btn-group recent-btn" role="group" aria-label="Basic example">
                    <button type="button" class="btn left-btn px-3">Latest Deposite</button>
                    <button type="button" class="btn btn-primary right-btn px-3">Latest Withdrew</button>
               </div>
          </div>

          <div class="container pb-5 pt-2">
               <div class="table-responsive">
                    <table class="table text-light table-hover mb-5">
                         <thead>
                              <tr>
                                   <th scope="col">TRX</th>
                                   <th scope="col">GATEWAY</th>
                                   <th scope="col">AMOUNT</th>
                                   <th scope="col">STATUS</th>
                                   <th scope="col">TIME</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">285CZZFJEC1P</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>1,000.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                              <tr>
                                   <th scope="row">AUHNOJNBBR2J</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>2,500.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                              <tr>
                                   <th scope="row">485CZZFGHC1P</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>4,900.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                              <tr>
                                   <th scope="row">XCVXPVEY1TNS</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>75,000.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                              <tr>
                                   <th scope="row">195CFFFJEC1P</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>5,000.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                              <tr>
                                   <th scope="row">485CZZFGHC1P</th>
                                   <td>BitCoin (Manual Payment)</td>
                                   <td>4,900.00 USD</td>
                                   <td class="text-success">Completed</td>
                                   <td>2021-10-21 02:18 PM</td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</section>


<!-- trust section -->
<section class="container-fluid card-section-one " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
     <div class="container text-light pt-5 pb-5" id="scrollspytrust">
          <div class="container ">
               <h2>Why You Trust Our Service</h2>
               <div class="row pt-4 card-section">
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-user-lock fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">Anonymity</h6>
                                   <p class="card-text">
                                        Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-user-secret fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">High reliability</h6>
                                   <p class="card-text">
                                        We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-credit-card fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">Quick Withdraw</h6>
                                   <p class="card-text">
                                        Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $10 .
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="row pt-4 card-section">
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-copyright fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">Legal Company</h6>
                                   <p class="card-text">
                                        Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-users fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">Referral Program</h6>
                                   <p class="card-text">
                                        We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-headset fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">24/7 Support</h6>
                                   <p class="card-text">
                                        We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty.
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="row pt-4 card-section">
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-credit-card fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">DDOS Protection</h6>
                                   <p class="card-text">
                                        We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"><i class="fa-solid fa-server fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">Dedicated Server</h6>
                                   <p class="card-text">
                                        We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                         <div class="card" style="width: 21rem;">
                              <div class="card-body bg-card-two">
                                   <h5 class="card-title bg-green"> <i class="fa-solid fa-lock fa-2x"></i> </h5>
                                   <h6 class="card-subtitle mb-4 mt-4">SSL Secured</h6>
                                   <p class="card-text">
                                        Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimat22
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- FAQ section -->
<section class="container-fluid" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

     <div class="container text-center text-light pt-5" id="scrollspyFaq">
          <div class="">
               <h2><em>Frequently Asked Questions</em></h2>
          </div>
          <div class="row pt-3">
               <div class="col-lg-6 mt-4 Faq-card">
                    <h5>
                         <button class="p-4 collapse-sec" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" style="width: 40rem;" aria-expanded="false" aria-controls="collapseExample">
                              When can i deposite/withdrew from my investment account? <span class="f1">^</span>
                         </button>
                    </h5>
                    <div class="collapse collapse-details" id="collapseExample">
                         <div class="card card-body">
                              Deposit and withdrawal are available for at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform. Deposit and withdrawal are available for at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform.
                         </div>
                    </div>
               </div>

               <div class="col-lg-6 mt-4 Faq-card">
                    <h5>
                         <button class="p-4 collapse-sec" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" style="width: 40rem;" aria-expanded="false" aria-controls="collapseExample">
                              How do i check my account ballance? <span class="f1">^</span>
                         </button>
                    </h5>
                    <div class="collapse collapse-details" id="collapseExample1">
                         <div class="card card-body">
                              You can see this anytime on your accounts dashboard. You can see this anytime on your accounts dashboard.
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-lg-6 mt-4 Faq-card">
                    <h5>
                         <button class="p-4 collapse-sec" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" style="width: 40rem;" aria-expanded="false" aria-controls="collapseExample">
                              I forgot my password what should i do? <span class="f1">^</span>
                         </button>
                    </h5>
                    <div class="collapse collapse-details" id="collapseExample2">
                         <div class="card card-body">
                              Visit the password reset page, type in your email address and click the `Reset` button.
                         </div>
                    </div>
               </div>
               <div class="col-lg-6 mt-4 Faq-card">
                    <h5>
                         <button class="p-4 collapse-sec" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" style="width: 40rem;" aria-expanded="false" aria-controls="collapseExample">
                              How will i know that the withdrawal has been successful? <span class="f1">^</span>
                         </button>
                    </h5>
                    <div class="collapse collapse-details" id="collapseExample3">
                         <div class="card card-body">
                              You will get an automatic notification once we send the funds and you can always check your transactions or account balance. Your chosen payment system dictates how long it will take for the funds to reach you. You will get an automatic notification once we send the funds and you can always check your transactions or account balance. Your chosen payment system dictates how long it will take for the funds to reach you.
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="container text-light mt-5 mb-5">
          <h2>Top Investors</h2>

          <div class="container investors-section">
               <div class="row mt-5 mb-5">
                    <div class="col-lg-3">
                         <div class="card ">
                              <div class="card-body">
                                   <img src="res/img/investor1.png" class="rounded float-start me-2" alt="...">
                                   <h5 class="card-title ms-2">Zahidul</h5>
                                   <p class="card-text bg-green">Åland Islands <br><span class="text-muted">11 Feb, 2021</span></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div class="card ">
                              <div class="card-body">
                                   <img src="res/img/investor2.png" class="rounded float-start me-2" alt="...">
                                   <h5 class="card-title ms-2">Rasel</h5>
                                   <p class="card-text bg-green">England <br><span class="text-muted">14 Feb, 2022</span></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div class="card ">
                              <div class="card-body">
                                   <img src="res/img/investor3.png" class="rounded float-start me-2" alt="...">
                                   <h5 class="card-title ms-2">Karima</h5>
                                   <p class="card-text bg-green">American Samoa <br><span class="text-muted">1 Feb, 2022</span></p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card ">
                              <div class="card-body">
                                   <img src="res/img/investor4.png" class="rounded float-start me-2" alt="...">
                                   <h5 class="card-title ms-2">Rahim</h5>
                                   <p class="card-text bg-green">Bangladesh <br><span class="text-muted">18 Feb, 2022</span></p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container text-center pt-4">
               <h2>
                    <em>What User Say About Us </em>
               </h2>
               <p class="mt-3">
                    We are doing really good at this market and here are the words we loved to get from a few of our users.
               </p>
          </div>

          <!-- testimony section -->
          <div class="container">
               <div class="row pt-5">
                    <div class="col-lg-4">
                         <div class="card w-70 ">
                              <div class="card-body testimony-card">
                                   <p class="card-text">
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green mb-4"></i> <br>
                                        <span class="h6">
                                             I have invested with this platform and gotten my money in my account. This is
                                             legit and safe. Great doing business with them.
                                        </span>
                                        .
                                   </p>
                                   <img src="res/img/testimony1.png" class="rounded float-start me-3" alt="...">
                                   <h5 class="card-title pt-3">Daniel .O.</h5>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 d-none-sm">
                         <div class="card w-70">
                              <div class="card-body testimony-card">
                                   <p class="card-text">
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green mb-4"></i> <br>
                                        <span class="h6">
                                             I have invested with this platform and gotten my money in my account. This is
                                             legit and safe. Great doing business with them.
                                        </span>
                                        .
                                   </p>
                                   <img src="res/img/testimony2.png" class="rounded float-start me-3" alt="...">
                                   <h5 class="card-title pt-3">Monilisa Thankur</h5>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 d-none-sm">
                         <div class="card w-70 ">
                              <div class="card-body testimony-card">
                                   <p class="card-text">
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green"></i>
                                        <i class="fa-solid fa-star bg-green mb-4"></i> <br>
                                        <span class="h6">
                                             I have invested with this platform and gotten my money in my account. This is
                                             legit and safe. Great doing business with them.
                                        </span>
                                        .
                                   </p>
                                   <img src="res/img/testimony3.png" class="rounded float-start me-3" alt="...">
                                   <h5 class="card-title pt-3">Captain C O</h5>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container text-center mt-5 pt-5" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
               <h6 id="scrollspypay">Payment Gateway</h6>
               <h2 class="mb-4">
                    <em>Payment Methods We Accept</em>
               </h2>
               <h5>
                    We accept mastercard and visa credit and all major cryptocurrencies and fiat <br> payment methods to make your investment process easier with our platform.
               </h5>

               <div class="container mt-4">
                    <i class="fa-brands fa-cc-paypal fa-5x border border-success me-3 "></i>
                    <i class="fa-brands fa-cc-stripe fa-5x border border-success me-3"></i>
                    <i class="fa-brands fa-bitcoin fa-5x border border-success me-3"></i>
                    <i class="fa-brands fa-hive fa-5x border border-success me-3 mt-3"></i>
               </div>
          </div>

          <div class="container text-center mt-5">
               <div class="row followers">
                    <div class="col-lg-3 followers-singel">
                         <h1 class="bg-green">24k</h1>
                         <p>Partnered Organization</p>
                    </div>
                    <div class="col-lg-3 followers-singel">
                         <h1 class="bg-green">22k</h1>
                         <p>Individual Users</p>
                    </div>
                    <div class="col-lg-3 followers-singel">
                         <h1 class="bg-green">56k</h1>
                         <p>Investors</p>
                    </div>
                    <div class="col-lg-3 followers-singel">
                         <h1 class="bg-green">24k</h1>
                         <p>Traders</p>
                    </div>
               </div>
          </div>
     </div>

</section>

<!-- Modal for login -->
<div class="container">
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-scrollable">
               <div class="modal-content login-modal text-light">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Login your account</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <form action="login-inc.php" method="post" name="loginForm">
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Email address</label>
                                   <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                                   <div id="emailHelp" class="form-text">Enter your email here.</div>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputPassword1" class="form-label">Password</label>
                                   <input type="password" class="form-control" name="logPassword" id="logPassword" required>
                              </div>
                              <div class="text-center mt-5 ">
                                   <button type="submit" name="login" class="btn btn-green mt-1 w-100">Login</button>
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer">
                         <p>
                              <span class="text-start">New to Coins Max Profits? <a href="#" class="bg-green">Sign Up</a> </span>
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- Modal for signup  -->
<div class="container">
     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-scrollable">
               <div class="modal-content login-modal text-light">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Signup your account</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <span class="text-danger align-middle error" id="errorMsg"></span>
                         <form action="register-inc.php" method="post" name="sign-up-form" id="sign-up-form" role="form" enctype="multipart/form-data">
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">First Name</label>
                                   <input type="text" name="firstName" class="form-control" id="firstName" aria-describedby="emailHelp" required>
                                   <div id="emailHelp" class="form-text">Please put in your first-name.</div>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                   <input type="text" name="lastName" class="form-control" id="lastName" aria-describedby="emailHelp" required>
                                   <div id="emailHelp" class="form-text">Please put in your last-name.</div>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Email</label>
                                   <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                   <input type="tel" name="phone" placeholder="your phone number" class="form-control" id="phone" aria-describedby="emailHelp" required>
                                   <div id="emailHelp" class="form-text">Please start with country code</div>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputPassword1" class="form-label">Password</label>
                                   <input type="password" name="pass" class="form-control" id="password" required>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                   <input type="password" name="confirmPass" class="form-control" id="confirmPass" required>
                              </div>
                              <div class="text-center mt-5 ">
                                   <button type="submit" name="submitRegister" class="btn btn-green mt-1 w-100">Signup</button>
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer">
                         <p>
                              <span class="text-start">already registered to Coins Max Profits? <a href="#" class="bg-green">Sign In</a> </span>
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>


<?php
require_once("footer.php")
?>