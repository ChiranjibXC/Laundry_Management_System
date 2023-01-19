<?php
      //$connection = mysqli_connect('localhost','root','','book_db');
      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send'])){
         $date = $_POST['date'];
         $topwear = $_POST['topwear'];
         $bottomwear = $_POST['bottomwear'];
         $woolen = $_POST['woolen'];
         $others = $_POST['others'];
         $servicetype = $_POST['servicetype'];
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         $description = $_POST['description'];

         if($date==null and $topwear==null and $bottomwear==null and $woolen==null and $others==null and $servicetype == null and $name==null and $email==null and $phone==null and $address==null and $description==null)
         {
            echo '<script>alert("Fields cannot be empty");location.href="http://localhost/Laundry_Management_System/book.php";</script>';
         } else{
            $request = "insert into book_form(date, topwear, bottomwear, woolen, others, servicetype, name, email, phone, address, description) values('$date','$topwear','$bottomwear','$woolen', '$others', '$servicetype', '$name', '$email', '$phone', '$address', '$description') ";
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Hurrah! your request has been submitted succesfully. Stay back we will connect with you shortly.");location.href="http://localhost/Laundry_Management_System/home.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            echo '<script>alert("Sorry! your request of cleaning session is failed. Please try again. ");location.href="http://localhost/Laundry_Management_System/book.php";</script>';

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