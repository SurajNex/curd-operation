<?php
    include ('function/config.php');
    if(isset($_POST['login'])){

      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password` = '$password'";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_num_rows($query);
      if($row < 1){

            header("location:login.php?Empty = plaese enter valid username or password");
      }else{
          $data = mysqli_fetch_assoc($query);

          $id = $data['id'];
          session_start();
          $_SESSION['id'] = $id;
          header("location:index.php");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<div class="fullscreen-container">
    <div class="login-container">
      <h1 class="header">Login</h1>
      <form class="form" method="post">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Type your username" >
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Type your password">
        </div>
        <button class="button" name="login">Login</button>
      </form>
      
      <h3 class="signup-header">Or <a href="singup.php">sign-up</a> using</h3>
      
      <div class="social-icons">
        <ul class="social-list">
          <li class="social-links"><a href=""><i class="fa-brands fa-facebook"></i></a></li>
          <li class="social-links"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
          <li class="social-links"><a href=""><i class="fa-brands fa-google"></i></a></li>
        </ul>
      </div>  
      
    </div>
  </div>
</body>
</html>