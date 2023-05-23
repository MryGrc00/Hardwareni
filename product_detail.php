<?php include('add_products.php');?>
<?php include('delete_product.php');?>
<?php include('edit_product.php');?>

<?php
// Retrieve the product ID from the query parameter
$productId = $_GET['id'];

// Find the specific product in the products array based on the ID
$product = null;
foreach ($products as $p) {
    if ($p['p_id'] == $productId) {
        $product = $p;
        break;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>AvengerSquad_HardwareNI</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="~/AvengerSquad_HardwareNI.styles.css" asp-append-version="true" />
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/carousel.css">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <style>
        .line {
            margin-bottom: 5px;
            border-bottom: 1px;
        }
    </style>
    <body style="padding-top: 0px;">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">Hardware N.I.</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a href="home.php" class="nav-link active" style="padding-left: 50px;padding-right: 50px;">
                                <i class="fa-sharp fa-solid fa-house fa-sm" style="color: #000000;">&nbsp&nbsp</i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #000000;">&nbsp&nbsp</i>Cart
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="product_cart.php" class="dropdown-item">Products</a></li>
                                    <li><a href="service_cart.html"class="dropdown-item">Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    Categories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="product.php" class="dropdown-item">Products</a></li>
                                    <li><a href="service.html"class="dropdown-item">Services</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="float: right;">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass fa-sm" style="color: #000000;"></i></button>
                            </form> 
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    <i class="fa-sharp fa-solid fa-ellipsis-vertical" style="color: #000000;"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="dashboard_order_product.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <!-- Display the product details -->
        <div class="container-fluid" style="margin: 0px; padding: 0px;">
            <main role="main" class="pb-3">
                <div class="container-fluid text-left">
                    <div class="row" style="height: auto;">
                        <div class="col-sm-6" style="padding-left: 0px;">
                            <img src="images/<?php echo $product['p_image']; ?>" width="90%" height="80%" alt="<?php echo $product['p_name']; ?>">
                        </div>
                        <div class="col-sm-6" style="padding-right: 130px;">
                            <h5 style="padding-top: 30px; margin: 0px;"><?php echo $product['p_name']; ?></h5><br>
                            <p>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>&nbsp&nbsp20 reviews
                            </p>
                            <hr>
                            <h5><?php echo "₱ " .$product['p_price']; ?></h5>
                            <hr>
                            <p>
                                <?php echo $product['p_desc']; ?>
                            </p>
                            <p>
                            <a href="product_cart.php?product_id=<?php echo $product['p_id']; ?>" class="btn btn-secondary my-5 me-3" style="background-color: #F09E00; border: 0px;">
                                <i class="fa-sharp fa-solid fa-cart-shopping fa-sm" style="color: #FFFFFF;"></i>Add to Cart
                            </a>
                                <a href="chat.html" class="btn btn-secondary my-5" style="background-color: #F09E00; border: 0px;">
                                    <i class="fa-solid fa-message" style="color: #FFFFFF;">&nbsp;&nbsp;</i>Message</a>
                            </p>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="container-fluid" style="text-align: center;">
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <div>
                            <h3>Similar Products</h3><br><br>
                        </div>
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            <br><br>
                            <h4>Diagonal Pliers</h4>
                            <p>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                            </p>
                            <p>₱800.00</p>
                            <p><a class="btn btn-secondary" href="product_detail.php">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            <br><br>
                            <h4>Bicycle Set Kit</h4>
                            <p>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                            </p>
                            <p>₱700.00</p>
                            <p><a class="btn btn-secondary" href="product_detail.php">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            <br><br>
                            <h4>One Hand Riveter</h4>
                            <p>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                            </p>
                            <p>₱900.00</p>
                            <p><a class="btn btn-secondary" href="product_detail.php">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div>
                            <p><a href="product.php" class="btn btn-secondary" href="#">See more</a></p>
                        </div>
                    </div><!-- /.row -->
                </div>
                <hr class="featurette-divider">
                <h5 style="padding-left: 100px;">Reviews</h5><br><br>
                <div class="container-fluid text-left">
                    <div class="row">
                        <div class="col-sm-2" style="padding-left: 100px;">
                            <img src="D:\Documents\second sem\imdbsys32\avengers squad\project\images\profile.jpg" height="90%" width="80%" alt="404">
                        </div>
                        <div class="col-sm-2">
                            <h6>MARY GRACE</h6>
                            <small>February 27, 2023</small><br>
                            <p>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                                <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p>
                                I just receive my order  this afternoon, the packaging was in good shape and the tool is very easy to use.
                                The seller is very  accommodating and the shipment is very fast. Thank you seller.
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <footer class="border-top footer text-muted">
            <div class="container">
                &copy; 2023 - AvengerSquad_HardwareNI - <a asp-area="" asp-page="/Privacy">Privacy</a>
            </div>
        </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/site.js" asp-append-version="true"></script>
        <script src="https://kit.fontawesome.com/b931b08b2b.js" crossorigin="anonymous"></script>
    </body>
</html>