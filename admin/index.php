<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="suisegs232.png" type="image/x-icon"/>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">

       <!-- font awesome-->  

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
    .admin_image{
    width: 200px;
    height: 200px;
    object-fit: contain;
}

.button button {
    width: 150px; /* adjust the width to your preference */
    text-align: center;
  }

  .footer{
    position: absolute;
    bottom: 0;
  }
</style>

</head>
<body>
    <!-- Navbar-->
    <div class="container-fluid p-0">




    <!-- Unang anak-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
        <img src="suisegs232.png" alt="logo" style="width: 50px;"/>
        <nav class="navbar navbar-expand-lg">  
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>
        </nav>
        </div>
    </nav>
            <!-- second child --> 
            <div class="bg-light">
                <h3 class="text-center p-2">Manage Product Details</h3>
            </div>

            <!-- Third child --> 

             <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                     <div class="p-3">
                      <a href="#"><img src="../pictures/teri.png" 
                        alt="" class="admin_image"></a>
                        <p class="text-light text-center">Admin Ayumi</p>
                     </div>
                      <!--  button*10>a.nav-link.text-light.bg-info.my-1 -->
                      <div class="button text-center">
                      <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert a Product</a></button>
                      <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                     <button><a href="index.php?insert_category" 
                     class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
               <button><a href="index.php?insert_type_of_product" class="nav-link text-light bg-info my-1">Insert Types Product</a></button>
           <button><a href="" class="nav-link text-light bg-info my-1">View Types of Products</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
           <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
         <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
</div>
                </div>
             </div>
            </div>
                    <!-- fourth child -->

                    <div class="container my-3">
                        <?php 
                        
                        if (isset($_GET['insert_category'])) {
                                include('insert_categories.php');
                        }
                        if (isset($_GET['insert_type_of_product'])) {
                            include('insert_brand.php');
                    }
                        ?>
                    </div>











               <!-- last child-->
         


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
      crossorigin="anonymous"></script>
</body>
</html>