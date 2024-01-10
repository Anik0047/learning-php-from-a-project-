<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/banner/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <h5>Welcome Guest</h5>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="mx-5 py-2">
                        <a href=""><img class="adminImage" src="../image/section-2/pic-1.jpg" alt=""></a>
                        <p class="text-light text-center pt-2">Admin Name</p>
                    </div>
                    <div class="button text-center">
                        <button class="my-2"><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">Insert Products</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">View Products</a></button>
                        <button><a href="InsertCategories.php" class="nav-link text-light bg-info my-1 px-5 py-2">Insert Categories</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">View Categories</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">Insert Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">View Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">All Orders</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">All Payments</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">List Users</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1 px-5 py-2">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>