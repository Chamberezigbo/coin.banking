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
                              <img src="./res/img/bitcoin.png" class="card-img-top " alt="..." height="410vh">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Pay Manually</h5>
                                   <p class="card-text">BitCoin (Manual Payment)</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Deposit</button>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                         <div class="card deposit-card mb-3 ">
                              <img src="./res/img/litecoin.jpg" class="card-img-top " alt="..." height="410vh">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Pay Manually</h5>
                                   <p class="card-text">LitCoin (Manual Payment)</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggleForLitCoin">Deposit</button>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                         <div class="card deposit-card mb-3 ">
                              <img src="./res/img/usdt.jpg" class="card-img-top " alt="..." height="410vh">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Pay Manually</h5>
                                   <p class="card-text">USDT (Manual Payment)</p>
                                   <div class="row">
                                        <button class="btn btn-success p-2 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalToggleForUsdt">Deposit</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
     </section>

     <!-- model for btc payment for btc -->
     <div class="container">
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Payment By BitCoin (Manual Payment)</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Deposit Limit: 50.00 - 50,000.00 USD

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
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Payment Preview</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <ul class="list-group text-center ">
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Charge: 0.00 USD</li>
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Conversion Rate: 1 USD = 0.00 BTC</li>
                              </ul>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"> Back</button>
                              <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Deposit Confirm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              Wallet Address:<span class="text-danger"> 1EHkuYH7sTwrzntp8akqQqoi4FFEjN6P7L </span>
                         </div>
                         <div class="modal-footer mt-5">
                              <form action="dashbord.php">
                                   <button class="btn btn-primary" type="submit">Payed</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- model payment for litCoin -->
     <div class="container">
          <div class="modal fade" id="exampleModalToggleForLitCoin" aria-hidden="true" aria-labelledby="exampleModalToggleForLitCoin" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Payment By LitCoin (Manual Payment)</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Deposit Limit: 50.00 - 50,000.00 USD

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
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggleLitCoin2" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggleLitCoin2" aria-hidden="true" aria-labelledby="exampleModalToggleLitCoin2" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Payment Preview</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <ul class="list-group text-center ">
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Charge: 0.00 USD</li>
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Conversion Rate: 1 USD = 0.00 LTC</li>
                              </ul>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"> Back</button>
                              <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggleLitCoin3" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>
          <div class="modal fade" id="exampleModalToggleLitCoin3" aria-hidden="true" aria-labelledby="exampleModalToggleLitCoin3" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Deposit Confirm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              Wallet Address:<span class="text-danger"> LamqKWdFs86ZaKhh57aGjTQH8NS4Yyn8Pj </span>
                         </div>
                         <div class="modal-footer mt-5">
                              <form action="dashbord.php">
                                   <button class="btn btn-primary" type="submit">Payed</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- end  of litCoin model-->

     <!-- model for USDT -->
     <div class="container">
          <div class="modal fade" id="exampleModalToggleForUsdt" aria-hidden="true" aria-labelledby="exampleModalToggleForUsdt" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Payment By LitCoin (Manual Payment)</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <h6>
                                   Deposit Limit: 50.00 - 50,000.00 USD

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
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggleUsdt2" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade" id="exampleModalToggleUsdt2" aria-hidden="true" aria-labelledby="exampleModalToggleUsdt2" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Payment Preview</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <ul class="list-group text-center ">
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Charge: 0.00 USD</li>
                                   <li class="list-group-item login-modal text-light">Payable:50,00 -50,000,00 USD</li>
                                   <li class="list-group-item login-modal text-light">Conversion Rate: 1 USD = 0.00 USDT</li>
                              </ul>
                         </div>
                         <div class="modal-footer mt-5">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"> Back</button>
                              <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggleUsdt3" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
                         </div>
                    </div>
               </div>
          </div>
          <div class="modal fade" id="exampleModalToggleUsdt3" aria-hidden="true" aria-labelledby="exampleModalToggleUsdt3" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content login-modal text-light">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Deposit Confirm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              Wallet Address:<span class="text-danger"> TSDxTW9j7x3CznwpaR6TufGJeTbW7gusS9 (TRC20) </span>
                         </div>
                         <div class="modal-footer mt-5">
                              <form action="dashbord.php">
                                   <button class="btn btn-primary" type="submit">Payed</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>



     <?php
     require_once("footer.php");
     ?>

<?php endif  ?>