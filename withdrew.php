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
               <h2>
                    <em>
                         Withdraw Money
                    </em>
               </h2>
               <div class="container d-flex justify-content-center">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                         <ol class="breadcrumb p-2">
                              <li class="breadcrumb-item text-light">
                                   <a href="#"><i class="fa-solid fa-house-chimney bg-green"></i> Home</a>
                              </li>
                              <li class="breadcrumb-item active text-light" aria-current="page">Withdraw Money</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row pt-5">
                    <div class="col-lg-4">
                         <div class="card deposit-card mb-3 text-center">
                              <div class="py-5">
                                   <h4>Bank Wire Transfer</h4>
                                   <img src="./res/img/bank-988164.png" class="card-img-top " alt="...">
                              </div>

                              <div class="card-body text-center">
                                   <h5 class="card-title">Limit : 50.00 - 100,000.00 USD</h5>
                                   <p class="card-text">Charge - 0.00 USD + 0.00%</p>
                                   <p class="card-text">Processing Time - 30 Mins</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggleBank  ">Withdraw</button>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="card deposit-card mb-3 text-center">
                              <h4>BitCoin</h4>
                              <img src="./res/img/bitcoin.png" class="card-img-top " alt="...">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Limit : 50.00 - 100,000.00 USD</h5>
                                   <p class="card-text">Charge - 0.00 USD + 0.00%</p>
                                   <p class="card-text">Processing Time - 30 Mins</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Withdraw</button>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="card deposit-card mb-3 text-center">
                              <h4>Ethereum</h4>
                              <img src="./res/img/ethereum.png" class="card-img-top " alt="...">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Limit : 50.00 - 100,000.00 USD</h5>
                                   <p class="card-text">Charge - 0.00 USD + 0.00%</p>
                                   <p class="card-text">Processing Time - 30 Mins</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggleEth">Withdraw</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          </div>
     </section>

     <div class="container">
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-dark">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Withdraw Via BitCoin</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Withdraw Limit: 50.00 - 100,000.00 USD

                                   Charge: 0.00 USD <br>

                                   Enter Amount*
                              </h6>
                              <div class="input-group mb-3">
                                   <span class="input-group-text">$</span>
                                   <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                                   <span class="input-group-text">USD</span>
                              </div>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggleBank" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-dark">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Withdraw Via Bank Wire Transfer</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Withdraw Limit: 1,000.00 - 100,000.00 USD

                                   Charge: 0.00 USD + 1.00 %<br>

                                   Enter Amount*
                              </h6>
                              <div class="input-group mb-3">
                                   <span class="input-group-text">$</span>
                                   <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                                   <span class="input-group-text">USD</span>
                              </div>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggleEth" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-dark">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Withdraw Via Ethereum</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Withdraw Limit: 50.00 - 100,000.00 USD

                                   Charge: 0.00 USD <br>

                                   Enter Amount*
                              </h6>
                              <div class="input-group mb-3">
                                   <span class="input-group-text">$</span>
                                   <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                                   <span class="input-group-text">USD</span>
                              </div>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary">Continue</button>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <?php
     require_once("footer.php")
     ?>

<?php endif  ?>