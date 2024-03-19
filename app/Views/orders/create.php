<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Order</title>
</head>
<body>
    <h1>Add New Order</h1>
    <form action="/orders/store" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="Username" required><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address" required><br>
        
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="ContactNumber" required><br>
        
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="ProductName" required><br>
        
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="ImageURL" required><br>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="Price" required><br>
        
        <label for="category">Category:</label>
        <input type="text" id="category" name="Category" required><br>
        
        <button type="submit">Add Order</button>
    </form>
</body>
</html>
