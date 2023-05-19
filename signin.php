<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="icon" href="suisegs232.png" type="image/x-icon" />
    <link rel="stylesheet" href="signinstyle.css" />

     <!-- BOOTSTRAP CSS LINK -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
     integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     
</head>
<body>
    <section class="registration-section" id="register">
    <h2>Register Now</h2>
    <p>WE OTAKU: An  E-Commerce where you can buy all your needs to fulfill your hobbies </p>
         <div class ="container d-flex align-items-center justify-content-center">
           <div class="card">
              <!-- card header -->
               <div class="card-header">
                   <h3 class="text-center">Sign-Up</h3>
               </div>
               <!-- card body -->
               <div class="card-body">
                   <form action="">
                    <!--first field -->
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user fa-xs"></i></span>
                    <div class="form-floating">
                    <input type="text" class="form-control" 
                    id="floatingInputGroup1" placeholder="Enter your Username">
                    <label for="floatingInputGroup1">Username</label>
                     </div> 
                     </div>
                    <!--second field -->
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key fa-xs"></i></span>
                    <div class="form-floating">
                    <input type="password" class="form-control" 
                    id="floatingInputGroup1" placeholder="Enter your Password">
                    <label for="floatingInputGroup1">Enter your Password</label>
                     </div> 
                     </div>

                     <!-- Sign up -->
                     <div class="form-group">
                     <a href="index.php"><input type="submit" name="signin" value="Sign In" class="btn signin_btn"></a>
                     </div>
                   </form>
               </div>
               <!-- card footer -->
               <div class="card-footer text-center ">
                Don't have an account?<a href="userhomepage.php">Signup</a>
               </div>
           </div>
         </div>
    </section>
    <div class="footer">
        <img src="suisegs232.png" alt="logo" style="float: left; margin-right: 10px;">
            <p>&copy; 2023 WE OTAKU</p>
            <p>All Rights Reserved</p>
      </div>
      
    
      
</body>
</html>