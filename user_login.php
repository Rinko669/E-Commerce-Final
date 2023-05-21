<?php
  include('include/connect.php');
  include('functions/commonfunction.php');
  @session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    body {
      background-image: url('./galaxsi.jpg');
      background-size: cover;
            background-repeat: no-repeat;
            overflow-x: hidden;
    }
     .form-label {
        color: yellow;
     }

  </style>
</head>
<body>
<div class="container-fluid m-3">
    <h2 class="text-center" style="color:yellow">User Login</h2>
    <div class="row d-flex align-items-center justify-content-center mt-5">
         <div class="col-lg-12 col-xl-6">
            <form action="" method="post">
                 <div class="form-outline mb-4"> 
                    <!-- user field -->
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username"
                     autocomplete="off" required="required" name="user_username"/>
                 </div>
                 <!-- Password -->
                 <div class="form-outline mb-4"> 
                    <label for="user_password" class="form-label">Enter your password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your Password"
                     autocomplete="off" required="required" name="user_password"/>
                 </div>
    
                  <div class="mt-4 pt-2">
                          <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                          <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="user_register.php" class="text-danger">Register</a></p>

                  </div>
            </form>

         </div>
    </div>
</div>
</body>
</html>

<?php
     if(isset($_POST['user_login'])){
      $user_username=$_POST['user_username'];
      $user_password=$_POST['user_password'];

      $select_query="Select * from `user_table` where 
      username='$user_username'";
      $result=mysqli_query($con,$select_query);
      $row_count=mysqli_num_rows($result);
      $row_data=mysqli_fetch_assoc($result);
      $user_ip=getIPAddress();
      if ($row_count>0){
          if (password_verify($user_password,$row_data['user_password'])){
            echo "<script>alert('Login Succesful')</script>";
          } else{
            echo "<script>alert('Invalid Credentials')</script>";
          }
      } else {
         echo "<script>alert('Invalid Credentials')</script>";
      }
     }

?>