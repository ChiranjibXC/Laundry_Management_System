<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Adminstrator Details</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<section class="header">

<a href="dashboard.php" class="logo">Blitz Cleaners</a>

<nav class="navbar">
   <a href="admin.php">Log Out</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<section class="packages">

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Adminstrator Page</h1>
</div>
<!-- <div class="box-container" align="left">
    <div class="box">
    <h2 style="text-transform: none;">

    // session_start();
    // echo'Registered users list:<br><br>';
    // $mysqli = new mysqli("localhost","root","","laundry_db");

    //     if ($mysqli -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    //     }

    //     $sql = "SELECT * FROM signup_form;";
    //     $result = $mysqli -> query($sql);

    //     // Fetch all
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo ('Name:'.'  '.$row["name"].' '.'||'.' '.'Email:'.'  '.$row["email"].'  '.'||'.' '.'Cell No:'.'  '.$row["phone"].'  '.'||'.' '.'Address:'.'  '.$row["address"].'<br>'.'<br>');
    //      }
    //     $mysqli -> close();
    //      ?></h2>
         </div> -->
    <div class="box">
        <h2  style="text-transform: none;"> <?php
        echo'Laundry Requests:<br><br>';
        $mysqli = new mysqli("localhost","root","","laundry_db");

        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        $sql = "SELECT * FROM book_form;";
        $result = $mysqli -> query($sql);

        // Fetch all
        while($row = mysqli_fetch_assoc($result)){
            echo ('Date:'.'  '.$row["date"].'  '.'||'.' '.'TopWear:'.'  '.$row["topwear"].'  '.'||'.' '.'BottomWear:'.'  '.$row["bottomwear"].'  '.'||'.' '.'WoolenCloth:'.'  '.$row["woolen"].'  '.'||'.' '.'Others:'.'  '.$row["others"].'  '.'||'.' '.'ServiceType:'.'  '.$row["servicetype"].'  '.'||'.' '.'Name:'.'  '.$row["name"].'  '.'||'.' '.'Email:'.'  '.$row["email"].' '.'||'.' '.'Phone:'.' '.$row["phone"].' '.'||'.' '.'Address:'.' '.$row["address"].' '.'||'.' '.'Description:'.' '.$row["description"].'<br>');
            echo'<input type="button" name="update" value="Update Status" onclick="status.php" /><br><br>';
         }
        $mysqli -> close();
?></h2>
</div>
</div>
        </section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
        </html> 