<?php
// connect to database
include('includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-info py-3">
            <div class="container-fluid">
                <img src="./image/banner/logo.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- second child -->
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
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
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of e-commerce and community</p>
        </div>

        <!-- fourth child -->
        <div class="container-fluid">
            <div class="row">
                <!-- Products -->
                <div class="col-md-10">
                    <div class="row">
                        <!-- fetching products from database -->
                        <?php
                        // Select 9 random products from the 'products' table
                        $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,9";

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
                        ?>

                    </div>
                </div>


                <!-- side nav -->
                <div class="col-md-2 p-0 bg-secondary">

                    <!-- brands part -->
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="" class="nav-link text-light">
                                <h4>Delivery Brands</h4>
                            </a>
                        </li>
                        <?php
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
                        ?>
                    </ul>

                    <!-- categories part -->
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="" class="nav-link text-light">
                                <h4>Categories</h4>
                            </a>
                        </li>
                        <?php
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
                        ?>

                    </ul>
                </div>
            </div>
        </div>





        <!-- last child -->
        <div class="bg-info p-3 text-center">
            <p>All rights reserved &#169; Designed by Anik-2024</p>
        </div>
    </div>






    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>