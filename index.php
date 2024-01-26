<?php
session_start();

if (isset($_POST['submit'])) {
    if (isset($_SESSION['product_counter'])) {
        $_SESSION['product_counter'] = $_SESSION['product_counter'] + 1;
    } else {
        $_SESSION['product_counter'] = 1;
        $_SESSION['product_name'] = array();
        $_SESSION['product_price'] = array();
        $_SESSION['product_image'] = array();
    }

    $_SESSION['product_name'][$_SESSION['product_counter']] = $_POST['product_name'];
    $_SESSION['product_price'][$_SESSION['product_counter']] = $_POST['product_price'];
    $_SESSION['product_image'][$_SESSION['product_counter']] = $_POST['product_image'];
}

if (isset($_POST['destroy'])) {
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FRESHCO</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>


<div class="col-md-12">
    <nav class="abcnav navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">FRESHCO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cart.php">Cart<span class="badge bg-dark">
                                <?php echo isset($_SESSION['product_counter']) ? $_SESSION['product_counter'] : 0; ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="hero-area col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-margin">
                <h1>Welcome</h1>
                <h4>Get everything you need under one roof</h4>
                <h5 class="Green">Have A Great Day...........</h5>
                <button class="btn btn-success">Shop Now</button>
            </div>
            <div class="hero-image col-md-6">
                <img src="1.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

<div class="hero-text product-area text-center">
    <h1>Grocery Items</h1>
    <div class="hero-text container">
        <div class="row">
            <div class="col-md-4 hero-text">
                <img src="2.jpg" class="img-fluid" alt="">
                <h4>Skimmed milk</h4>
                <h4>CAD $7.30</h4>
                <form action="" method="POST">
                    <input type="hidden" name="product_name" value="Skimmed Milk">
                    <input type="hidden" name="product_price" value="7.40">
                    <input type="hidden" name="product_image" value="img/1.jpg">
                    <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
                </form>
            </div>
            <div class="col-md-4 hero-text">
    <img src="3.jpg" class="img-fluid" alt="">
    <h4>Orange</h4>
    <h4>CAD $12.50</h4>
    <form action="" method="POST">
        <input type="hidden" name="product_name" value="Green Peppers">
        <input type="hidden" name="product_price" value="7.40">
        <input type="hidden" name="product_image" value="img/6.jpg">
        <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
    </form>
</div>

<div class="col-md-4 hero-text">
    <img src="4.jpg" class="img-fluid" alt="">
    <h4>Apple</h4>
    <h4>CAD $5.30</h4>
    <form action="" method="POST">
        <input type="hidden" name="product_name" value="Romaine Lettuce">
        <input type="hidden" name="product_price" value="11.50">
        <input type="hidden" name="product_image" value="img/5.jpg">
        <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
    </form>
</div>

<div class="col-md-4 hero-text">
    <img src="5.jpg" class="img-fluid" alt="">
    <h4>Banana</h4>
    <h4>CAD $5.30</h4>
    <form action="" method="POST">
        <input type="hidden" name="product_name" value="APPLE">
        <input type="hidden" name="product_price" value="4.40">
        <input type="hidden" name="product_image" value="img/2.jpg">
        <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
    </form>
</div>

<div class="col-md-4 hero-text">
    <img src="6.jpg" class="img-fluid" alt="">
    <h4>Romaine Lettuce</h4>
    <h4>CAD $16.30</h4>
    <form action="" method="POST">
        <input type="hidden" name="product_name" value="ORANGE">
        <input type="hidden" name="product_price" value="8.40">
        <input type="hidden" name="product_image" value="img/3.jpg">
        <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
    </form>
</div>

<div class="col-md-4 hero-text">
    <img src="7.jpg" class="img-fluid" alt="">
    <h4>Green pepper</h4>
    <h4>CAD $3.30</h4>
    <form action="" method="POST">
        <input type="hidden" name="product_name" value="BANANA">
        <input type="hidden" name="product_price" value="8.40">
        <input type="hidden" name="product_image" value="img/4.jpg">
        <button class="btn btn-success" type="submit" name="submit">Add to cart</button>
    </form>
</div>

        </div>
    </div>
</div>

<footer class="abcnav bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <p>&copy; 2024 Developed by BONISH. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
