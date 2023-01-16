<?php
require("./db.php");
if (isset($_GET['updateId'])) {
     $id = $_GET['updateId'];
          $enteredBal = $_POST['enteredBal'];
          $sql = "DELETE FROM users  WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if ($result) {
               header("location:admin.php");
          }else {
               echo (mysqli_error($conn));
               header("location:admin.php?error=mysqli_error");
          }
}
?>