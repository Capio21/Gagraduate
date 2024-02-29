<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }
        .product {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            cursor: pointer;
        }
        .product img {
            width: 100%;
            height: auto;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .product-info {
            padding: 15px;
        }
        .product-info h3 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }
        .product-info p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        .product-info .price {
            font-weight: bold;
            color: #ff6600;
        }
        .product-info .action {
            margin-top: 10px;
            text-align: right;
        }
        .product-info .action a, .product-info .action button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-left: 5px;
        }
        .product-info .action a:hover, .product-info .action button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    
    <div class="container">
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product" onclick="location.href='/seller/buy/<?= $product['id'] ?>'">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['product_name'] ?>">
                    <div class="product-info">
                        <h3><?= $product['product_name'] ?></h3>
                        <p><?= $product['description'] ?></p>
                        <p class="price">₱<?= number_format($product['price'], 2) ?></p>
                        <p>Stock: <?= $product['stock_count'] ?></p>
                        <div class="action">
                            <a href="/seller/edit/<?= $product['id'] ?>">Edit</a>
                            <a href="/seller/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            <button onclick="addToCart(<?= $product['id'] ?>)">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function addToCart(productId) {
            if (confirm('Add this product to cart?')) {
                // You can make an AJAX request here to add the product to the cart
                // and update the stock count accordingly
                window.location.href = '/seller/add_to_cart/' + productId;
            }
        }
    </script>
</body>
</html>

              