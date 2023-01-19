<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="header">

<a href="admin.php" class="logo">Blitz Cleaners</a>

<nav class="navbar">
   <a href="index.php">Return To User Login</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Admin</h1>
</div>

<section class="booking">

   <h1 class="heading-title">Admin Login</h1>

   <form action="" method="post" class="login-form">

      <div class="flex">
         <div class="inputBox">
            <h3>UserId: </h3>
            <input type="text" placeholder="enter username" name="id">
         </div>
         <div class="inputBox">
            <h3>Password :</h3>
            <input type="password" placeholder="enter your Password" name="password">
         </div>
         <input type="submit" value="Login" class="btn" name="send">
      </div>   

    
      <!-- <center> -->
      <!-- <div class="btn" onclick="location.href='http://localhost/travel%20website/home.php';">Login</div> -->

      <!-- <p>Are you already an user? NO.</p> -->

      <!-- <div class="btn" onclick="location.href='http://localhost/travel%20website/signup.php';">Sign-up</div> -->
      <!-- </center> -->
   </form>


<?php

include 'connect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $email = $_POST['id'];
   $pass = $_POST['password'];

   if($email==null && $pass==null)
   {
      echo '<script>alert("Fields cannot be empty")</script>';
   }
   else{

      $select_user = $conn->prepare("SELECT * FROM admin_form WHERE id = ? AND password = ?");
      $select_user->execute([$email, $pass]);
      $row = $select_user->fetch(PDO::FETCH_ASSOC);

      if($select_user->rowCount() > 0){
         $_SESSION['user_id'] = $row['id'];
         echo '<script>alert("Login Successful");location.href="http://localhost/Laundry_Management_System/dashboard.php";</script>';
      }else{
         echo '<script>alert("Login Failed");</script>';
      }

   }
}

?>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>