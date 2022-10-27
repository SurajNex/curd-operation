<?php 
    include '../function/config.php';
    if(isset($_POST['submit'])){
        
        $id=0;
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $mail=mysqli_real_escape_string($conn,$_POST['mail']);
        $town=mysqli_real_escape_string($conn,$_POST['town']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,md5($_POST['password']));

        //Insert Query
        $sql = "INSERT INTO login VALUES('$id', '$name', '$address', '$mail', '$town', '$gender', '$username', '$password')";
        $query = mysqli_query($conn,$sql);
        if($query){
            if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['mail']) || empty($_POST['town']) || empty($_POST['gender']) || empty($_POST['username']) || empty($_POST['password'])){
                header("location:register.php?Please fill all fields");
            }else
            {
                header("location:login.php");
            }
        }else{
            header("location:register.php?Plaese check the form");
        }
    }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" action="" method="POST">
      <p>Enter your personal details below</p>
      <input type="text" class="form-control1" placeholder="Full Name" name="name" autofocus="">
      <input type="text" class="form-control1" placeholder="Address" name="address" autofocus="">
      <input type="text" class="form-control1" placeholder="Email" name="mail" autofocus="">
      <input type="text" class="form-control1" placeholder="City/Town" name="town" autofocus="">
      <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" checked="" name="gender" value="Male"> Male
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio" name="gender" value="Female"> Female
        </label>
	  </div>
	  <p> Enter your account details below</p>
      <input type="text" class="form-control1" placeholder="User Name" name="username" autofocus="">
      <input type="password" class="form-control1" placeholder="Password" name="password">
      <!---<input type="password" class="form-control1" placeholder="Re-type Password">-->
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit" name="submit">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="login.php">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
