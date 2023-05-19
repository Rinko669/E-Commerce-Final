<?php
           include('../include/connect.php');
           if (isset($_POST['insert_brand'])) {
                 $product_name=$_POST['product_name'];
                 
                 //select data from database
                 $select_query="Select * from `type_of_products` where 	product_name='$product_name'";
                 $result_select=mysqli_query($con, $select_query);
                 $number=mysqli_num_rows ($result_select);
                 if($number>0) {
                    echo "<script>alert('Item Duplicated')
                    </script>";
                 } else {

                 
                 $insert_query="insert into `type_of_products` (product_name) values ('$product_name')"; 
                 $result=mysqli_query($con, $insert_query);
                 if ($result) {
                    echo "<script>alert('Product has been inserted successfully')
                    </script>";
                 }
           }}
    ?>



<h2 class="text-center">Insert Products</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control"name="product_name" 
    placeholder="Insert Product Type" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
     <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" 
      value="Insert the Type of  Product">
      
</div>
</form>