<?php
session_start();
// print_r($_SESSION["user_id"]);
$emailFromDB =  $_SESSION["user_id"];

      //$connection = mysqli_connect('localhost','root','','book_db');
      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send'])){
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         if($name==null || $phone==null || $address==null )
         {
            echo '<script>alert("Fields cannot be empty");location.href="http://localhost/Laundry_Management_System/profile.php";</script>';
         } else{
            $request = "update signup_form set name ='$name',phone ='$phone',address ='$address' where email ='$emailFromDB'" ;
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Profile Updated Successfully.");location.href="http://localhost/Laundry_Management_System/home.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            echo '<script>alert("Profile Update Failed.Please try Again");location.href="http://localhost/Laundry_Management_System/profile.php";</script>';
            }
         }
      }else{
         echo 'something went wrong please try again!';
      }

   ?>
<html>
<link rel="stylesheet" href="css/style.css">
<center>
<!-- <h1>Booking created successfully,sit back we'll contact you soon.</h1><br>
<div class="btn" onclick="location.href='http://localhost/Laundry_Management_System/home.php';">Return To Home</div> -->

</center>
   </html> 