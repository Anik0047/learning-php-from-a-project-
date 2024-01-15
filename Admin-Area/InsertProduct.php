<?php
include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- Form Start -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 mt-5 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>

                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
            </div>

            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>

                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
            </div>

            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keyword</label>

                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Product Keyword" autocomplete="off" required>
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                    // Select all records from the 'categories' table
                    $select_query = "Select * from `categories`";

                    // Execute the query using mysqli_query and store the result in $result_query
                    $result_query = mysqli_query($con, $select_query);

                    // Loop through each row in the result set
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        // Retrieve the category title from the current row
                        $category_title = $row['category_title'];

                        // Retrieve the category ID from the current row
                        $category_id = $row['category_id'];

                        // Output an HTML <option> tag with the category ID as the value and category title as the display text
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>

                </select>
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="">Select a Brands</option>
                    <?php
                    // Select all records from the 'brands' table
                    $select_query = "Select * from `brands`";

                    // Execute the query using mysqli_query and store the result in $result_query
                    $result_query = mysqli_query($con, $select_query);

                    // Loop through each row in the result set
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        // Retrieve the brand title from the current row
                        $brand_title = $row['brands_title'];

                        // Retrieve the brand ID from the current row
                        $brand_id = $row['brands_id'];

                        // Output an HTML <option> tag with the brand ID as the value and brand title as the display text
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>

                </select>
            </div>

            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>

                <input type="file" name="product_image1" id="product_image1" class="form-control" autocomplete="off" required>
            </div>

            <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>

                <input type="file" name="product_image2" id="product_image2" class="form-control" autocomplete="off" required>
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>

                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert-product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>
        </form>
        <!-- Form End -->
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>