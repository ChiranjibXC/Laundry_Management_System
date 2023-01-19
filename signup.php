<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SignUp</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Register into Blitz</h1>
</div>


<section class="booking">

<h3 class="heading-title">Enter Your Details</h3>

<form action="signup_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
        </div>
        <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
        </div>
        <div class="inputBox">
            <span>Password :</span>
            <input type="password" placeholder="enter your password" name="password" required>
        </div>
        <div class="inputBox">
            <span>Phone No :</span>
            <input type="number" min="0000000000" max="9999999999" placeholder="enter your number" name="phone" required>
        </div>
        <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your address" name="address"required>
        </div>
        <div class="inputBox">
            <span>Security Question:</span>
            <select name = "securityquestion" class = "box drp_btn" required>
               <option value = "color">What is your favourite color?</option>
               <option value = "father">What is your father's name?</option>
               <option value = "petspecies">Which animal is your pet?</option>
               <option value = "petname">What is the name of your pet?</option>
               <option value = "number">What is your favourite number?</option>
               <option value = "cricketer">Who's your favourite cricketer?</option>

            </select>
         </div>
         <div class="inputBox">
            <span>Answer of Security Question :</span>
            <input type="text" placeholder="enter your appropriate answer of security question" name="securityanswer" required>
        </div>
    </div>
    <center>
    <input type="submit" value="submit" class="btn" name="send">
</center>
</form>

</section>



















<!-- <section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>HelpDesk</h3>
         <a href="https://www.indiatravelforum.in"> <i class="fas fa-angle-right"></i>Ask Your Queries</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="https://en.wikipedia.org/wiki/Privacy_policy"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="terms.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>Contact Us</h3>
         <a href="contact.php"> <i class="fas fa-phone"></i> Satya Narayan Mohapatra </a>
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

 footer section ends -->









<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script> -->

</body>
</html>