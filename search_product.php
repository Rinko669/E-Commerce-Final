<?php
  include('include/connect.php');
  include('functions/commonfunction.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="suisegs232.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css"/>

    <title>Homepage</title> 
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- font aweseome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
      <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img src="suisegs232.png" alt="logo" style="width: 50px;"/>
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><span style="text-decoration: underline;">WE OTAKU</span></a>

    <button class="navbar-toggler" type="button" 
    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Carts<i class="fa-solid fa-cart-shopping fa-xs" style="position: relative; top: 2px; left: 5px;"></i></a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php total_cart_price();?>/-</a>
        </li>
     
     
      </ul>
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" 
        aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
     <!-- second child -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
           <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_login.php">Login</a>
      </li>
      </ul>
     </nav>


     <!-- third child -->
      <div class="bg-light">
        <h3 class="text-center">WE OTAKU</h3>
        <p class="text-center">An E-Commerce where you can buy all your needs to fulfill your hobbies</p>
      </div>
      

      <!-- fourth child -->
        <div class="row px-1">
          <div class="col-md-10">
          <!--WE OTAKU PRODUCTS-->
            <div class="row">
              <!-- fetch prod --> 
                 <?php
                  search_product();
                   getunique_categories();
                   getunique_product();
                  ?>
                       <!-- row end--> 
                           </div>
                           <!-- col end -->
                              </div>
                            <div class="col-md-2 bg-secondary p-0">
                              <!-- Types of Product-->
                              <ul class="navbar-nav me-auto text-center">
                                <li class="nav-item bg-info">
                                  <a href="#" class="nav-link text-light"><h4>Types of Product</h4>
                                  </a>
                                </li>

                                <?php
                                       getproduct();
                                       ?>
                              </ul>
                              <!-- Category of Product--> 
                              <ul class="navbar-nav me-auto text-center">
                                <li class="nav-item bg-info">
                                  <a href="#" class="nav-link text-light"><h4>Category</h4>
                                  </a>
                                </li>
                                  
                                <?php
                                 getcategories();
                                ?>
                              </ul>
                                </div>
                                 </div>

              <!-- last child-->
               <?php 
                  include('./include/footer.php');
               
               ?>




      

      <!-- js bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
      crossorigin="anonymous"></script>
</body>
</html>