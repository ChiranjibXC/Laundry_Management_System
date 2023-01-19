<?php
      
    $connection = new mysqli('localhost', 'root', '', 'laundry_db');
    if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $securityquestion = $_POST['securityquestion'];
    $securityanswer = $_POST['securityanswer'];

    if($name==null || $email==null || $password==null || $phone==null || $address==null || $securityquestion==null || $securityanswer==null)
    {
       echo '<script>alert("Fields cannot be empty");location.href="http://localhost/Laundry_Management_System/signup.php";</script>';
    } else{
    $request = " insert into signup_form(name, email, password, phone, address, securityquestion, securityanswer) values('$name','$email', '$password', '$phone','$address','$securityquestion','$securityanswer') ";
         //mysqli_query($connection, $request);
            if ($connection->query($request)) {
            //echo'hii';
            //echo'<script>alert("New record created successfully");</script>';
            $_POST = array();
            echo '<script>alert("Account Created Successfully.Please Login.");location.href="http://localhost/Laundry_Management_System/index.php";</script>';

            } else {
                echo "Error: " . $request . "<br>" . $connection->error;
            }
         //header('location:book.php'); 
        }
    }
        else{
        echo 'something went wrong please try again!';
    }
?>
<link rel="stylesheet" href="css/style.css">
<!-- <center>
<h1> Account created successfully.</h1><br>
<div class="btn" onclick="location.href='http://localhost/Laundry_Management_System/index.php';">Go to Login Page</div>
</center> -->
