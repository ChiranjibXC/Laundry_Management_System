

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book session</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
      
if (isset($_POST['status'])) {
    $email = $_POST['email'];
    echo $email;
}
   ?>


<section class="booking">

   <h1 class="heading-title">Update Status</h1>

   <form action="post_status.php" method="post" class="book-form">

      <div class="flex">
      <div class="inputbox">
            <span>Email :</span>
            <p><h1><?=$email?></h1></p>
         </div> 
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" name="email" value="<?=$email?>">
        </div>
        
         <div class="inputBox">
            <span>Status:</span>
            <select name = "statusType" class = "box drp_btn">
               <option value = " Order Recieved" selected>Order Recieved</option>
               <!-- <option value = "Accepted">Accepted</option> -->
               <option value = "In Progess">In Progress</option>
               <option value = "Completed">Completed</option>

            </select>
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
      <input type="submit" value="submit" class="btn" name="send_status">
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
         <a href="https://www.indiatravelforum.in"> <i class="fas fa-angle-right"></i>Ask Your Queries</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="https://en.wikipedia.org/wiki/Privacy_policy"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="terms.php"> <i class="fas fa-angle-right"></i> terms of use</a>
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

<script>
         document.getElementById("name").value = "<?php echo $nameFromDB ?>";
         document.getElementById("email").value = "<?php echo $emailFromDB ?>";
         document.getElementById("phone").value = "<?php echo $phoneFromDB ?>";
         document.getElementById("address").value = "<?php echo $addressFromDB ?>";
</script>








<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>