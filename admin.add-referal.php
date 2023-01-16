<?php
require("./db.php");
if (isset($_GET['updateId'])) {
     $id = $_GET['updateId'];
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $refName = $_POST['enteredBal'];
          $sql = "UPDATE  users SET referral ='$refName'  WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if ($result) {
               header("location:admin.php");
          } else {
               echo (mysqli_error($conn));
               header("location:admin.php?error=mysqli_error");
          }
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Airships investment</title>
     <link rel="shortcut icon" href="/favicon.ico" />
</head>

<body>
     <div class="container-fluid bg-dark mb-5">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container-fluid">
                    <a class="navbar-brand" href="admin.php">Admin dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>

     <div class="container">
          <form action="" method="POST">
               <div class="row align-items-center d-flex justify-content-center">
                    <div class="col-auto">
                         <label for="inputPassword6" class="col-form-label">Enter Referal Email</label>
                    </div>
                    <div class="col-auto">
                         <input type="email" id="inputPassword6" class="form-control" name="enteredBal" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Save</button>
               </div>

          </form>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>