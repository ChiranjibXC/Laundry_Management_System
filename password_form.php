


<?php
session_start();
// print_r($_SESSION["user_id"]);
    $emailFromDB =  $_SESSION["user_id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laundry_db";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM `signup_form` WHERE email='$emailFromDB'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      
       while($row = $result->fetch_assoc()) {          
          $passwordFromDB = $row["password"];
       }
    } else {
       echo "0 results";
    }
    




      //$connection = mysqli_connect('localhost','root','','book_db');
      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send-pass'])){
         $currentPW = $_POST['curr_pass'];
         $newPW = $_POST['new_pass'];
         $reNewPW = $_POST['re_new_pass'];
         
         if(($passwordFromDB==$currentPW) and ($newPW==$reNewPW))
         {
            $request = "update signup_form set password ='$newPW' where email ='$emailFromDB'" ;
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Password Updated Successfully.Please Login Again");location.href="http://localhost/Laundry_Management_System/index.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            }
            
         } else{
            echo '<script>alert("Please check your password");location.href="http://localhost/Laundry_Management_System/password.php";</script>';
        }
      }else{
         echo 'something went wrong please try again!';
      }

   ?>
<html>
<link rel="stylesheet" href="css/style.css">
<!-- <center>
<h1>Booking created successfully,sit back we'll contact you soon.</h1><br>
<div class="btn" onclick="location.href='http://localhost/Laundry_Management_System/index.php';">Return To Home</div>
      
</center> -->
   </html> 