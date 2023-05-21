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
 <style>
   .cart_img {
     width: 100px;
     height: 100px;
     object-fit: contain;
   }
   .input-spacing {
  margin-right: 10px; /* Adjust the margin as needed */
}

 </style>
    <title>Carts</title> 
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
          <a class="nav-link" href="user_register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cart.php">Carts<i class="fa-solid fa-cart-shopping fa-xs" 
        style="position: relative; top: 2px; left: 5px;"></i><sup><?php cart_item();?></sup></a>

        </li>
      </ul>
              
    </div>
  </div>
</nav>
      <!-- Calling cart functions -->
      <?php
        cart();
      ?>
     <!-- second child -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
           <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      </ul>
     </nav>


     <!-- third child -->
      <div class="bg-light">
        <h3 class="text-center">WE OTAKU</h3>
        <p class="text-center">An E-Commerce where you can buy all your needs to fulfill your hobbies</p>
      </div>
      
          <!-- fourth child -->
          <div class="container">
  <div class="row">
    <form action="" method="post">
    <table class="table table-bordered text-center">
      
         <?php
                   $get_ip_add = getIPAddress();
                   $total_price=0;
                   $cart_query = "Select * from  `cart_details` where ip_address ='$get_ip_add'";
                   $result= mysqli_query($con, $cart_query);
                   $result_count=mysqli_num_rows($result);
                   if ($result_count>0){
                           echo  " <thead>
                          <tr>
                          <th>Product Name</th>
                          <th>Product Image</th>
                         <th>Quantity</th>
                         <th>Total Price</th>
                        <th>Remove</th>
                        <th>Operations</th>
                         </tr>
                       <tbody>
                        <tr>";
                 
                   while ($row=mysqli_fetch_array( $result)){
                     $product_id=$row['product_id'];
                     $select_products = "Select * from  `product_name` where product_id =' $product_id'";
                     $result_products=mysqli_query($con, $select_products);
                     while ($row_product_price=mysqli_fetch_array( $result_products)){
                       $product_price= array($row_product_price['product_price']);
                       $price_table=$row_product_price['product_price'];
                       $product_title= $row_product_price['product_title'];
                       $product_image1= $row_product_price['product_image1'];
                       $product_values= array_sum( $product_price);
                       $total_price+=$product_values;         
         ?>
                       
          <td><?php echo $product_title?></td>
          <td><img src="./pictures/<?php echo $product_image1?>" alt="" class="cart_img"></td>
          <td><input type="text" name="qty" class="form-input 
          w-50"></td>
          <?php
                          $get_ip_add = getIPAddress();
                           if(isset($_POST['update_cart'])){
                               $quantities=$_POST['qty'];
                               $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                               $result_products_quantity=mysqli_query($con, $update_cart);
                               $total_price=$total_price*$quantities;
                           }
                          ?>


          <td><?php echo $price_table?>/-</td>
          <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></td>
          <td>
  <!--<button class="btn btn-info">Update Carts</button> -->
  <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
<span class="input-spacing"></span>
<input type="submit" value="Remove Item" class="bg-danger px-3 py-2 border-0 mx-3" name="remove_cart">

</div>
          </td>

        </tr>
         <?php }
                  } }
                  else {

                    echo "<div style='text-align: center;'>";
                    echo "<h2>Cart is empty</h2>";
                    echo "<img src='./pictures/amber.jpg' alt='Empty Cart' style='width: 400px; height: 400px; display: block; margin: 0 auto;'>";
                    echo "</div>";
                    
                  }
                  ?>
      </tbody>
    </table>
    <!-- SUbtotal -->
     <div class="d-flex mb-5">
      <?php
         $get_ip_add = getIPAddress();
         $cart_query = "Select * from  `cart_details` where ip_address ='$get_ip_add'";
         $result= mysqli_query($con, $cart_query);
         $result_count=mysqli_num_rows($result);
         if ($result_count>0){
          echo"   <h4 class='px-3'>Subtotal:<strong class='text-info'> $total_price/-</strong></h4>
          <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>
 <button class='bg-danger px-2 py-3 border-0 mx-3'><a href='checkout.php' class='text-light text-decoration-none'> Checkout</a></button>";
  } else
  {
   echo "  <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>";
  }
  if (isset($_POST['continue_shopping'])) {
    echo "<script>window.open('index.php','_self')</script>" ;
  }
   ?> 
           


     </div>
  </div>
</div>
      </div>
      </form>
       <!-- functions to remove items -->
  <?php
     function remove_cart_item(){
      global $con;
      if (isset($_POST['remove_cart'])){
          foreach($_POST['removeitem'] as $remove_id){
             echo $remove_id;
             $delete_query= "Delete  from  `cart_details` where product_id=$remove_id";
             $run_delete=mysqli_query($con,$delete_query);
             if ($run_delete){
               echo "<script>window.open('cart.php','_self')</script>";
             }
          }
     }
    }
    echo $remove_item=remove_cart_item();
  ?>
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