<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h1>Edit Order</h1>
    <form action="/orders/update/<?= $order['OrderID']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="Username" value="<?= $order['Username']; ?>" required><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address" value="<?= $order['Address']; ?>" required><br>
        
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="ContactNumber" value="<?= $order['ContactNumber']; ?>" required><br>
        
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="ProductName" value="<?= $order['ProductName']; ?>" required><br>
        
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="ImageURL" value="<?= $order['ImageURL']; ?>" required><br>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="Price" value="<?= $order['Price']; ?>" required><br>
        
        <label for="category">Category:</label>
        <input type="text" id="category" name="Category" value="<?= $order['Category']; ?>" required><br>
        
        <button type="submit">Update Order</button>
    </form>
</body>
</html>
