<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$products = [
    ["name" => "Product 1", "price" => "10.00", "description" => "Description 1"],
    ["name" => "Product 2", "price" => "20.00", "description" => "Description 2"],
    ["name" => "Product 3", "price" => "30.00", "description" => "Description 3"],
    ["name" => "Product 4", "price" => "40.00", "description" => "Description 4"],
    ["name" => "Product 5", "price" => "50.00", "description" => "Description 5"],
    ["name" => "Product 6", "price" => "60.00", "description" => "Description 6"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="product-styles.css">
</head>
<body>
    <div class="product-container">
        <h1>Our Products</h1>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <h3><?php echo $product["name"]; ?></h3>
                    <p>Price: $<?php echo $product["price"]; ?></p>
                    <p><?php echo $product["description"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
