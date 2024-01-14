<?php
// Including the file that establishes the database connection
include('../includes/connect.php');

// Checking if the form has been submitted with the 'insert_cat' parameter
if(isset($_POST['insert_cat'])){
    // Retrieving the category title from the submitted form input data
    $category_title=$_POST['cat_title'];

    // Selecting data from the database to check if the category already exists
    $select_query="Select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($con,$select_query);
    
    // Counting the number of rows returned from the select query
    $number=mysqli_num_rows($result_select);

    // Checking if the category already exists
    if($number>0){
        echo "<script>alert('This category already exists.')</script>";
    }else{
        // Inserting the new category into the database
        $insert_query="insert into `categories` (category_title) value ('$category_title')";
        $result=mysqli_query($con,$insert_query);

        // Checking if the insertion was successful and displaying an alert
        if($result){
            echo "<script>alert('Successfully inserted category')</script>";
        }
    }
}
?>

<h2 class="text-center">Insert Categories</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
    </div>
    <div class="input-group w-90 mb-2">
        <input type="submit" class="bg-info px-4 py-2 border-0" name="insert_cat" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class="bg-info">
    </div>
</form>