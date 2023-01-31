<?php
      //$connection = mysqli_connect('localhost','root','','book_db');
      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send_status'])){
         $statusType = $_POST['statusType'];
         $email = $_POST['email'];
         

         if($email==null and $statusType==null)
         {
            echo '<script>alert("Please Select");location.href="http://localhost/Laundry_Management_System/admin-status.php";</script>';
         } else{
            // $request = "insert into status_form(email, status) values('$email', '$statusType')";
            $request = "update signup_form set status ='$statusType' where email ='$email'" ;

            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Status Updated.");location.href="http://localhost/Laundry_Management_System/dashboard.php";</script>';

            } else if($connection->error=="Duplicate entry '$email' for key 'PRIMARY'"){
            $request = "update status_form set status ='$statusType' where email ='$email'" ;
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Status Updated Successfully.");location.href="http://localhost/Laundry_Management_System/dashboard.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            echo '<script>alert("Profile Update Failed.Please try Again");location.href="http://localhost/Laundry_Management_System/admin-status.php";</script>';
            }

            }
            else{
                echo 'nnnnnnnn';
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