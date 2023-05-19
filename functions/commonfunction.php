<?php

// include  connect file
 include('./include/connect.php');

//getting products
function getproducts(){
    global $con;
     if (!isset($_GET['category'])){
        if (!isset($_GET['product'])){
    $select_Query="Select * from `product_name` order by rand() LIMIT 0,9";
                  $result_query=mysqli_query($con, $select_Query);
                  while($row=mysqli_fetch_assoc($result_query)) {
                     $product_id=$row['product_id'];
                     $product_title=$row['product_title'];
                     $product_description=$row['product_description'];
                     $product_image1=$row['product_image1'];
                     $product_price=$row['product_price'];
                     $category_id=$row['category_id'];
                     $type_of_product_id=$row['type_of_product_id'];
                       echo "<div class='col-md-4 mb-2'>
                       <div class='card'>
                         <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                         <div class='card-body'>
                           <h5 class='card-title'>$product_title</h5>
                           <p class='card-text'>$product_description</p>
                           <p class='card-text'> Price: Php $product_price/-</p>
                           <a href='index.php?added_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                         </div>
                       </div>
                            </div>";
                  }              
}  
     }
    }        
    
    // getting unique product 
                          
    function getunique_product(){
        global $con;

        //conditions
         if (isset($_GET['product'])){
            $type_of_product_id =$_GET['product'];
        $select_Query="Select * from `product_name` where type_of_product_id=$type_of_product_id ";
        $result_query=mysqli_query($con, $select_Query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger'> No stock for this Product</h2>";
        }


                      while($row=mysqli_fetch_assoc($result_query)) {
                         $product_id=$row['product_id'];
                         $product_title=$row['product_title'];
                         $product_description=$row['product_description'];
                         $product_image1=$row['product_image1'];
                         $product_price=$row['product_price'];
                         $category_id=$row['category_id'];
                         $type_of_product_id=$row['type_of_product_id'];
                           echo "<div class='col-md-4 mb-2'>
                           <div class='card'>
                             <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                             <div class='card-body'>
                               <h5 class='card-title'>$product_title</h5>
                               <p class='card-text'>$product_description</p>
                               <p class='card-text'> Price: Php $product_price/-</p>
                               <a href='index.php?added_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>     
                               <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                             </div>
                           </div>
                                </div>";
                      }              
    }  
         }

             // getting unique categories 
                  
    function getunique_categories(){
      global $con;

      //conditions
       if (isset($_GET['category'])){
          $category_id=$_GET['category'];
      $select_Query="Select * from `product_name` where category_id=$category_id";
      $result_query=mysqli_query($con, $select_Query);
      $num_of_rows=mysqli_num_rows($result_query);
      if($num_of_rows==0){
          echo "<h2 class='text-center text-danger'> No stock for this Category</h2>";
      }


                    while($row=mysqli_fetch_assoc($result_query)) {
                       $product_id=$row['product_id'];
                       $product_title=$row['product_title'];
                       $product_description=$row['product_description'];
                       $product_image1=$row['product_image1'];
                       $product_price=$row['product_price'];
                       $category_id=$row['category_id'];
                       $type_of_product_id=$row['type_of_product_id'];
                         echo "<div class='col-md-4 mb-2'>
                         <div class='card'>
                           <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                           <div class='card-body'>
                             <h5 class='card-title'>$product_title</h5>
                             <p class='card-text'>$product_description</p>
                             <p class='card-text'> Price: Php $product_price/-</p>
                             <a href='index.php?added_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                             <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                           </div>
                         </div>
                              </div>";
                    }              
  }  
       }
              // getting all product

              function getallproducts(){
                  global $con;
                   if (!isset($_GET['category'])){
                      if (!isset($_GET['product'])){
                  $select_Query="Select * from `product_name` order by rand()";
                                $result_query=mysqli_query($con, $select_Query);
                                while($row=mysqli_fetch_assoc($result_query)) {
                                   $product_id=$row['product_id'];
                                   $product_title=$row['product_title'];
                                   $product_description=$row['product_description'];
                                   $product_image1=$row['product_image1'];
                                   $product_price=$row['product_price'];
                                   $category_id=$row['category_id'];
                                   $type_of_product_id=$row['type_of_product_id'];
                                     echo "<div class='col-md-4 mb-2'>
                                     <div class='card'>
                                       <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                                       <div class='card-body'>
                                         <h5 class='card-title'>$product_title</h5>
                                         <p class='card-text'>$product_description</p>
                                         <a href='index.php?added_to_cart='$product_id' class='btn btn-info'>Add to Cart</a>
                                         <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                       </div>
                                     </div>
                                          </div>";
                                }              
              }  
                   }
                  }        
              

   
    





                 //for typeofproducts
                 function getproduct() {
                    global $con;
                    $select_products= "Select * from `type_of_products`";
                    $result_products= mysqli_query($con,$select_products);
                   while ($row_data=mysqli_fetch_assoc( $result_products)) {
                     $product_name=$row_data['product_name'];
                     $type_of_product_id=$row_data['type_of_product_id'];
                     echo"<li class='nav-item'>
                       <a href='index.php?product=$type_of_product_id' class='nav-link text-light'>$product_name
                       </a>
                     </li>";
                   }
                     
                 }
                   // for categories

                   function getcategories(){
                    global $con;
                    $select_category= "Select * from `categories`";
                    $result_category= mysqli_query($con, $select_category);
                    //$row_data=mysqli_fetch_assoc( $result_products);
                   // echo $row_data['product_name'];

                   while ($row_data=mysqli_fetch_assoc( $result_category)) {
                     $category_title=$row_data['category_title'];
                     $category_id=$row_data['category_id'];
                     echo"<li class='nav-item'>

                       <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title	
                       </a>
                     </li>";
                   }

                   }


                   // get search 
                   
                   function search_product() {
                    global $con;
                    if(isset($_GET['search_data_product'])){
                      $search_data_value=$_GET['search_data'];
                   $search_query="Select * from `product_name` where product_keywords like '%$search_data_value%'";
                                 $result_query=mysqli_query($con, $search_query);
                                 $num_of_rows=mysqli_num_rows($result_query);
                                 if($num_of_rows==0){
                                     echo "<h2 class='text-center text-danger'> No result for the product</h2>";
                                 }
                                 while($row=mysqli_fetch_assoc($result_query)) {
                                    $product_id=$row['product_id'];
                                    $product_title=$row['product_title'];
                                    $product_description=$row['product_description'];
                                    $product_image1=$row['product_image1'];
                                    $product_price=$row['product_price'];
                                    $category_id=$row['category_id'];
                                    $type_of_product_id=$row['type_of_product_id'];
                                      echo "<div class='col-md-4 mb-2'>
                                      <div class='card'>
                                        <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                          <h5 class='card-title'>$product_title</h5>
                                          <p class='card-text'>$product_description</p>
                                          <p class='card-text'> Price: Php $product_price/-</p>
                                          <a href='index.php?added_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                                          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                      </div>
                                           </div>";
                                 }              
               }  
                    
              }

              //  view details functions

              function view_details(){
                global $con;
                if(isset($_GET['product_id'])){
                if (!isset($_GET['category'])){
                   if (!isset($_GET['product'])){
                    $product_id=$_GET['product_id'];
               $select_Query="Select * from `product_name` where product_id = $product_id";
                             $result_query=mysqli_query($con, $select_Query);
                             while($row=mysqli_fetch_assoc($result_query)) {
                                $product_id=$row['product_id'];
                                $product_title=$row['product_title'];
                                $product_description=$row['product_description'];
                                $product_image1=$row['product_image1'];
                                $product_image2=$row['product_image2'];
                                $product_image3=$row['product_image3'];
                                $product_price=$row['product_price'];
                                $category_id=$row['category_id'];
                                $type_of_product_id=$row['type_of_product_id'];
                                  echo "<div class='col-md-4 mb-2'>
                                  <div class='card'>
                                    <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                                    <div class='card-body'>
                                      <h5 class='card-title'>$product_title</h5>
                                      <p class='card-text'>$product_description</p>
                                      <p class='card-text'> Price: Php $product_price/-</p>
                                      <a href='index.php?added_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                                      <a href='index.php' class='btn btn-secondary'>Back</a>
                                    </div>
                                  </div>
                                       </div>
                                       <div class='col-md-8'>
                                       <!-- related card --> 
                                         <div class='row'>
                                           <div class='col-md-12'>
                                              <h4 class='text-center text-info mb-5'>Related Pictures</h4>
                                           </div>

                                           <div class='col-md-6'>
                                           <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>

                                           </div>
                                           <div class='col-md-6'>
                                           <img src='./admin/products/$product_image3' class='card-img-top' alt='$product_title'>
                                               </div>
                                         </div>
                                   </div>
                                       ";
                             }              
           }  
                }
              }
            }
                  // get ip functions
                  function getIPAddress() {  
                    //whether ip is from the share internet  
                     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                                $ip = $_SERVER['HTTP_CLIENT_IP'];  
                        }  
                    //whether ip is from the proxy  
                    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
                     }  
                //whether ip is from the remote address  
                    else{  
                             $ip = $_SERVER['REMOTE_ADDR'];  
                     }  
                     return $ip;  
                }  
               // $ip = getIPAddress();  
              //  echo 'User Real IP Address - '.$ip; 
              
              // cart Functions
            function cart() {
  if (isset($_GET['added_to_cart'])) {
    global $con;
    $get_ip_add = getIPAddress();
    $get_product_id = $_GET['added_to_cart'];
    $select_Query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
    $result_query = mysqli_query($con, $select_Query);
    $num_of_rows =mysqli_num_rows($result_query);
    if ($num_of_rows > 0) {
      echo "<script>alert('This item is already in the cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    } 
    else 
    {
      $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id,'$get_ip_add',0)";
      $result_query = mysqli_query($con, $insert_query);
      echo "<script>alert('This item is added to cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }  
}
// function to get the cart notifications

 function cart_item(){
    if (isset($_GET['added_to_cart'])) {
      global $con;
      $get_ip_add = getIPAddress();
      $select_Query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
      $result_query = mysqli_query($con, $select_Query);
      $count_cart_items=mysqli_num_rows($result_query);
    }else{
      global $con;
      $get_ip_add = getIPAddress();
      $select_Query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
      $result_query = mysqli_query($con, $select_Query);
      $count_cart_items=mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
  }  
   // total price function
    function total_cart_price (){
      global $con;
      $get_ip_add = getIPAddress();
      $total_price=0;
      $cart_query = "Select * from  `cart_details` where ip_address ='$get_ip_add'";
      $result= mysqli_query($con, $cart_query);
      while ($row=mysqli_fetch_array( $result)){
        $product_id=$row['product_id'];
        $select_products = "Select * from  `product_name` where product_id =' $product_id'";
        $result_products=mysqli_query($con, $select_products);
        while ($row_product_price=mysqli_fetch_array( $result_products)){
          $product_price= array($row_product_price['product_price']);
          $product_values= array_sum( $product_price);
          $total_price+=$product_values;

      }
    } 
     echo $total_price;
  }
?>