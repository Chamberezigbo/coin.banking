<?php
require_once("dash_header.php");
?>


<?php if (isset($_SESSION['verified']) && $_SESSION['verified'] == 0) : ?>
     <div class="container mb-5">
          <form action="activation-inc.php" method="post" name="activation">
               <div class="card text-center mt-5">
                    <div class="card-header">
                         Activate here
                    </div>
                    <div class="card-body">
                         <h5 class="card-title">A code was sent to your email check your inbox</h5>

                         <div class="row g-3 align-items-center">
                              <div class="col-lg-12">
                                   <label for="inputPassword6" class="col-form-label">Activation Code</label>
                              </div>
                              <div class="col-lg-12">
                                   <input type="text" id="inputPassword6" name="otpCode" id="otpCode" class="form-control" aria-describedby="passwordHelpInline" placeholder="Enter the code here">
                                   <input type="text" id="dbOtpCode" class="form-control d-none" value="<?= $_SESSION['otpCode']; ?>" aria-describedby="passwordHelpInline" placeholder="Enter the code here">
                              </div>
                              <div class="col-lg-12">
                                   <span id="passwordHelpInline" class="form-text">
                                        Please activate you account to enjoy our offer
                                   </span><br>
                                   <button type="submit" class="btn btn-primary mt-5" name="activate">Activate</button>
                              </div>
                         </div>
                    </div>
                    <div class="card-footer text-muted">
                         Welcome
                    </div>
               </div>
          </form>
     </div>
<?php else : ?>
     <section>
          <div class="container dashboard-home pt-5 text-center position-relative">
               <h2>
                    <em>
                         Dashboard
                    </em>
               </h2>
               <div class="container d-flex justify-content-center">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                         <ol class="breadcrumb p-2">
                              <li class="breadcrumb-item text-light">
                                   <a href="#"><i class="fa-solid fa-house-chimney bg-green"></i> Home</a>
                              </li>
                              <li class="breadcrumb-item active text-light" aria-current="page">Library</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </section>

     <section class="pt-5 pb-5">
          <div class="container">

               <div class="container pb-5 text-center">
                    <div class="row">
                         <div class="col-lg-3 pt-2">
                              <div class="card bg-card-green">
                                   <div class="card-body">
                                        <p class="card-text text-center">Total Balance</p>
                                        <h5 class="card-title text-center h2">$ <?= $_SESSION['balance']; ?> </h5>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-3 pt-2">
                              <div class="card bg-card-blue">
                                   <div class="card-body">
                                        <p class="card-text text-center">Total Deposite</p>
                                        <h5 class="card-title text-center h2">$ 0.00</h5>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-3 pt-2">
                              <div class="card bg-card-blue">
                                   <div class="card-body">
                                        <p class="card-text text-center">Total Withdraw</p>
                                        <h5 class="card-title text-center h2">$ 0.00</h5>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-3 pt-2">
                              <div class="card bg-card-blue">
                                   <div class="card-body">
                                        <p class="card-text text-center">Total Investment</p>
                                        <h5 class="card-title text-center h2">$ 0.00</h5>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="row">
                    <div class="col-lg-4 mt-5">
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

                    <div class="col-lg-4 ml-5 mt-5">
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

                    <div class="col-lg-4 mt-5">
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
               </div>
               <div class="row">
                    <div class="col-lg-4 mt-5 mx-auto">
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


<?php endif  ?>



<?php
require_once("footer.php")
?>