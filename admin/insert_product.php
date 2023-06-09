<?php
include('../include/connect.php');

if(isset($_POST['insert_product'])) {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $product_categories = $_POST['product_categories'];
    $product_type= $_POST['product_type'];
    $product_price = $_POST['price'];
    $product_status ='true';

    // accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accessing image temp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // checking empty conditions
     if($product_name=='' or $description== '' or   $keywords== '' or  $product_categories== '' 
     or $product_type== '' or $product_price== '' or $product_image1== '' or 
     $product_image2== '' or $product_image3== '') {
        echo "<script>alert('Please fill in all the required fields.')</script>";
        exit();
     } else {
        move_uploaded_file($temp_image1, "./products/$product_image1");
        move_uploaded_file($temp_image2, "./products/$product_image2");
        move_uploaded_file($temp_image3, "./products/$product_image3");

        // insert query
        $insert_product = "insert into `product_name` (product_title,product_description,
        product_keywords,category_id,type_of_product_id,
        product_image1,product_image2,product_image3,product_price,date,status)
           values ('$product_name','$description', '$keywords', '$product_categories','$product_type',  
            '$product_image1', '$product_image2', '$product_image3', '$product_price',NOW(),'$product_status')";
            $result_query=mysqli_query($con,$insert_product);
            if($result_query) {
                echo "<script>alert('Info Successfully Inserted into the Database.')</script>";
            }
          
        }
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a Product</title>
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
</head>
<body class="bg-light">
    <div class="container mt-3">
       <h1 class="text-center">Insert Products</h1>
          <!--form -->
           
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" 
                id="product_name" class="form-control" placeholder="Enter the Product Name"
                 autocomplete="off" required="required">
            </div>

            <!-- description of the product --> 
            <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product 
                Description</label>
                <input type="text" name="description" 
                id="description" class="form-control" placeholder="Enter the Product Description"
                 autocomplete="off" required="required">
            </div>

            <!-- keyword-->
            <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product 
                Keywords</label>
                <input type="text" name="keywords" 
                id="keywords" class="form-control" placeholder="Enter the Product Keywords"
                 autocomplete="off" required="required">
            </div>

            <!-- Product categories -->
            <div class="form-outlne  mb-4 w-50 m-auto">
                   <select name="product_categories" id="" class="form-select">
                         <option value="">Select a Category</option>
                         <?php
                            $select_query="Select *from `categories`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc( $result_query)) {
                                $category_title=$row['category_title'];
                                $category_id=$row['category_id'];
                                echo "<option value='$category_id'> $category_title</option>";
                            }
                            
                          ?>
                   </select>
            </div>
             <!-- Product Types-->
             <div class="form-outlne  mb-4 w-50 m-auto">
                   <select name="product_type" id="" class="form-select">
                         <option value="">Select Type of Product</option>
                         <?php
                            $select_query="Select *from `type_of_products`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc($result_query)) {
                                $product_name=$row['product_name'];
                                $type_of_product_id =$row['type_of_product_id'];
                                echo "<option value='$type_of_product_id '>$product_name</option>";
                            }
                            
                          ?>
                   </select>
            </div>
            <!-- Image1-->
            <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product 
                Image 1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control"  required="required">
            </div>
            <!-- Image 2 --> 
              <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product 
                Image 2</label>
                <input type="file" name="product_image2" 
                id="product_image2" class="form-control"  required="required">
            </div>

            <!-- Image 3 --> 
              <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product 
                Image 3</label>
                <input type="file" name="product_image3" 
                id="product_image3" class="form-control"  required="required">
            </div>
             <!-- price-->
             <div class="form-outlne  mb-4 w-50 m-auto">
                <label for="price" class="form-label">Product 
                Price</label>
                <input type="text" name="price" 
                id="price" class="form-control" placeholder="Enter the Product Price"
                 autocomplete="off" required="required">
            </div>
               <!-- submit-->
             <div class="form-outlne  mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>
          </form>
    </div>
    
</body>
</html>