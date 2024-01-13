<?php
// Including the file that establishes the database connection
include('../includes/connect.php');

// Checking if the form has been submitted with the 'insert_brand' parameter
if(isset($_POST['insert_brand'])){
    // Retrieving the brand title from the submitted form data
    $brand_title=$_POST['brand_title'];

    // Selecting data from the database to check if the brand already exists
    $select_query="Select * from `brands` where brands_title='$brand_title'";
    $result_select=mysqli_query($con,$select_query);

    // Counting the number of rows returned from the select query
    $number=mysqli_num_rows($result_select);

    // Checking if the brand already exists
    if($number>0){
        echo "<script>alert('This brand already exists.')</script>";
    }else{
        // Inserting the new brand into the database
        $insert_query="insert into `brands` (brands_title) value ('$brand_title')";
        $result=mysqli_query($con,$insert_query);

        // Checking if the insertion was successful and displaying an alert
        if($result){
            echo "<script>alert('Successfully inserted brand')</script>";
        }
    }
}
?>



<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-90 mb-2">
        <input type="submit" class="bg-info px-4 py-2 border-0" name="insert_brand" value="Insert Brand" aria-label="Username" aria-describedby="basic-addon1" class="bg-info">
    </div>
</form>