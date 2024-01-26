<?php session_start(); ?>

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
            <nav class="mynav navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">FRESHCO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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

          <div class="mycart cart-item">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Shopping Cart</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sub Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
if (isset($_SESSION['product_name'])) {
    $filtered_array = array_unique($_SESSION['product_name']);
    $item_repeated = array_count_values($_SESSION['product_name']);

    
    $products = array(
        'Skimmed milk' => array('image' => '2.jpg', 'price' => 7.30),
        'Orange' => array('image' => '3.jpg', 'price' => 12.50),
        'Apple' => array('image' => '4.jpg', 'price' => 5.30),
        'Banana' => array('image' => '5.jpg', 'price' => 5.30),
        'Romaine Lettuce' => array('image' => '6.jpg', 'price' => 16.30),
        'Green pepper' => array('image' => '7.jpg', 'price' => 3.30),
        
    );

    $grand_total = 0;

    foreach ($filtered_array as $row) {
        if (isset($products[$row])) {
            $product_price = $products[$row]['price'];
            $subtotal = $item_repeated[$row] * $product_price;
            $grand_total += $subtotal;

            echo "<tr>
                    <td><img src='img/{$products[$row]['image']}' class='img-fluid cart-item-image' alt='{$row}'></td>
                    <td>{$row}</td>
                    <td>{$item_repeated[$row]}</td>
                    <td>\${$product_price}</td>
                    <td>\${$subtotal}</td>
                  </tr>";
        } else {
           
            echo "<tr>
                    <td>{$row}</td>
                    <td colspan='4'>Product details not found</td>
                  </tr>";
        }
    }

    echo "<tr>
            <td>Grand Total:</td>
            <td>\${$grand_total}</td>
          </tr>";
}
?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <footer class="bg-dark text-light py-4">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <p>&copy; 2024 Developed by Bonish. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

          <script src="js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
