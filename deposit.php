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
                         <p class="card-text">Enter your the code in the input box</p>

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
                                   <button type="submit" class="btn btn-primary" name="activate">Activate</button>
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
               <div class="container">
                    <?php if ($_SESSION['verified'] > 0) : ?>
                         <div class="alert alert-success d-flex align-items-center position-absolute top-0 end-0 " id="alertActivation" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                   <use xlink:href="#check-circle-fill" />
                              </svg>
                              <div>
                                   account has been activated
                              </div>
                         </div>
                    <?php endif  ?>
               </div>
               <h2>
                    <em>
                         Deposit Methods
                    </em>
               </h2>
               <div class="container d-flex justify-content-center">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                         <ol class="breadcrumb p-2">
                              <li class="breadcrumb-item text-light">
                                   <a href="#"><i class="fa-solid fa-house-chimney bg-green"></i> Home</a>
                              </li>
                              <li class="breadcrumb-item active text-light" aria-current="page">Deposit Methods</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row pt-5">
                    <div class="col-lg-4 mx-auto">
                         <div class="card deposit-card mb-3 ">
                              <img src="./res/img/bitcoin.png" class="card-img-top " alt="...">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Pay Manually</h5>
                                   <p class="card-text">BitCoin (Manual Payment)</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1">Deposit</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <?php
     require_once("footer.php");
     ?>

<?php endif  ?>