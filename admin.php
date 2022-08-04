<?php
require_once('db.php');
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
                    <a class="navbar-brand" href="#">Admin dashboard</a>
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
     <!-- table section for the users  -->
     <div class="container mt-5 table-responsive">
          <table class="table table-light table-">
               <caption class="text-center">List of users and you and can update your balance by clicking the button</caption>
               <thead class="table-dark">
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">First Name</th>
                         <th scope="col">Last Name</th>
                         <th scope="col">Handle</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Balance</th>
                         <th scope="col">ID</th>
                         <th scope="col">Operation</th>
                         <th scope="col">Operation</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $sql = "Select * from `users`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                         $num = 0;
                         while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $firstName = $row['firstName'];
                              $lastName = $row['lastName'];
                              $email = $row['email'];
                              $phone = $row['phone'];
                              $balance = $row['balance'];
                              $num++;
                    ?>

                              <tr>
                                   <th scope="row"><?= $num ?></th>
                                   <td><?= $firstName ?></td>
                                   <td><?= $lastName ?></td>
                                   <td><?= $email ?></td>
                                   <td><?= $phone ?></td>
                                   <td><?= $balance ?></td>
                                   <td><?= $id ?></td>
                                   <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                             <a href="admin.edit.php?updateId='<?= $id; ?>'" class="text-light">Edit</a>
                                        </button></td>
                                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                             <a href="admin.delete-inc.php?updateId='<?= $id; ?>'" class="text-light">Delete</a>
                                        </button></td>
                              </tr>
                    <?php }
                    } ?>
               </tbody>
          </table>
     </div>




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>