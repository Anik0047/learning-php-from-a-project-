<?php

// connect to database
include('./includes/connect.php');



function getProducts(){

    global $con;

    // Select 3 random products from the 'products' table
    $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,3";

    // Execute the query using mysqli_query and store the result in $result_query
    $result_query = mysqli_query($con, $select_query);

    // Loop through each row in the result set
    while ($row = mysqli_fetch_assoc($result_query)) {
        // Retrieve product details from the current row
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        // Output HTML for each product with retrieved details
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img class='card-img-top' src='./Admin-Area/Product Images/$product_image1' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Price: $product_price</p>
                        <a href='#' class='btn btn-primary'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
    }
};

function getBrand(){

    global $con;

    // Selecting all brands from the 'brands' table in the database
    $select_brands = "Select * from `brands`";
    // Executing the query and storing the result set in $result_brands
    $result_brands = mysqli_query($con, $select_brands);

    // Looping through each row in the result set
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        // Extracting brand_title and brand ID from the current row
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        // Outputting HTML code for each category as list item with a link
        echo "<li class='nav-item'>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
    </li>";
    }
};

function getCategories(){

    global $con;

    // Selecting all categories from the 'categories' table in the database
    $select_categories = "Select * from `categories`";
    // Executing the query and storing the result set in $result_categories
    $result_categories = mysqli_query($con, $select_categories);

    // Looping through each row in the result set
    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        // Extracting category title and category ID from the current row
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];

        // Outputting HTML code for each category as list item with a link
        echo "<li class='nav-item'>
        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
    }
}

?>