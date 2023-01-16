<?php
require_once("dash_header.php")
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
                         Refer users
                    </em>
               </h2>
               <div class="container d-flex justify-content-center">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                         <ol class="breadcrumb p-2">
                              <li class="breadcrumb-item text-light">
                                   <a href="#"><i class="fa-solid fa-house-chimney bg-green"></i> Home</a>
                              </li>
                              <li class="breadcrumb-item active text-light" aria-current="page">Referal Log</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </section>

     <section>
          <div class="container pb-5 pt-5 text-center">
               <strong>You can refer users by sharing your referral link:</strong><br>
               <div class="mb-3 mt-3 input-group">
                    <input type="text" class="form-control myInput readonly text-dark bg-light" value="http://localhost/menship?ref=<?= $_SESSION['email'] ?>" id="myInput" readonly="">
                    <div class="input-group-append">
                         <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                    </div>
               </div><br>
               <h3 class="title1">
                    <small>You were referred by</small><br>
                    <i class="fa fa-user fa-2x"></i><br>
                    <small><?php ($_SESSION['referral'] == NULL ? print('You where not refered') : print($_SESSION['referral'])) ?></small>
               </h3>
               <div class="table-responsive pt-5">
                    <table class="table text-dark mb-5">
                         <thead>
                              <tr>
                                   <th scope="col">FirstName</th>
                                   <th scope="col">Last Name</th>
                                   <th scope="col">email</th>
                                   <th scope="col">Phone</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                              $ref = $_SESSION['email'];
                              $sql = "SELECT * FROM users WHERE referral  =  '$ref' ";
                              $result = mysqli_query($conn, $sql);
                              if ($result) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                              ?>

                                        <tr>
                                             <td><?= $firstName ?></td>
                                             <td><?= $lastName ?></td>
                                             <td><?= $email ?></td>
                                             <td><?= $phone ?></td>
                                        </tr>
                                   <?php }
                              } else {
                                   ?>
                                   <tr class="odd">
                                        <td valign="top" colspan="4" class="dataTables_empty text-center">No data available in table</td>
                                   </tr>
                              <?php }; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </section>

     <?php
     require_once("footer.php");
     ?>
<?php endif  ?>