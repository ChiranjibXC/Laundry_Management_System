<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php
   session_start();
   // print_r($_SESSION["user_id"]);
   $emailFromDB =  $_SESSION["user_id"];
   // echo $emailFromDB;

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
  // output data of each row
   while($row = $result->fetch_assoc()) {
      // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      $passwordFromDB =  $row["password"];
    //   $phoneFromDB = $row["phone"];
    //   $addressFromDB = $row["address"];
            // echo "yessssss";
   }
} else {
   echo "0 results";
}

   ?>

<section class="header">

   <a href="home.php" class="logo">Blitz Cleaners</a>

   <nav class="navbar">
      <a href="home.php">Dashboard</a>
      <a href="profile.php">Profile</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="about.php">About</a>
      <a href="logout.php">Log Out</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1></h1>
</div>


<section class="booking">

   <h1 class="heading-title">Update Your Password</h1>

   <form action="recoverPassword_form.php" method="post" class="book-form">

      <div class="flex">
         <!-- <div class="inputBox">
            <span>Current Password :</span>
            <input  type="password" placeholder="enter your current password"  name="password" required>
         </div>  -->
         <div class="inputBox">
            <span>New Password :</span>
            <input  type="password"  placeholder="enter your new password" name="new_pass" required>
         </div>
         <div class="inputBox">
            <span>Re-enter New Password :</span>
            <input  type="password" placeholder="re-enter your new password" name="re_new_pass" required>
         </div>
            <?php

            ?>
         </div>
         <style>
               .drp_btn{
                  min-width:100%;
                  padding: 1.2rem 1.4rem;
                  font-size: 1.6rem;
                  color: var(--light-black);
                  text-transform: none;
                  margin-top: 1.5rem;
                  border:1px solid black;
               }
            </style>
             
             
         
        
      </div>
      <center>
      <input type="submit" value="Update Password" class="btn" name="send-pass">
</center>

   </form>
</section>




<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
         <a href="logout.php"><i class="fas fa-angle-right"></i>Log Out</a>
      </div>

      <div class="box">
         <h3>HelpDesk</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="https://en.wikipedia.org/wiki/Privacy_policy"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>

      <div class="box">
         <h3>Contact Us</h3>
         <a href="contact.php"> <i class="fas fa-phone"></i> Chiranjib Parida </a>
         <a> <i class="fas fa-envelope"></i> wanderlush@gmail.com </a>
         <a> <i class="fas fa-map"></i> Bhubaneswar,Odisha,India</a>
      </div>

      <div class="box">
         <h3>Social Media Handles</h3>
         <a href="www.facebook.com"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="www.twitter.com"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="www.instagram.com"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="www.linkedin.com"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

   <div class="credit">All rights reserved!</div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>