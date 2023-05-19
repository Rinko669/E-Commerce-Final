<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php
           include('../include/connect.php');
           if (isset($_POST['insert_cat'])) {
                 $category_title=$_POST['Categ_title'];
                 
                 //select data from database
                 $select_query="Select * from `categories` where category_title='$category_title'";
                 $result_select=mysqli_query($con, $select_query);
                 $number=mysqli_num_rows ($result_select);
                 if($number>0) {
                    echo "<script>alert('Item Duplicated')
                    </script>";
                 } else {

                 
                 $insert_query="insert into `categories` (category_title) values ('$category_title')"; 
                 $result=mysqli_query($con, $insert_query);
                 if ($result) {
                    echo "<script>alert('Category has been inserted successfully')
                    </script>";
                 }
           }}
    ?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control"name="Categ_title" 
    placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" 
      value="Insert Categories">
     
</div>
</form>