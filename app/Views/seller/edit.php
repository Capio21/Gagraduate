<!-- app/Views/seller/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/seller/update/<?= $product['id'] ?>" method="post">
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name" value="<?= $product['product_name'] ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?= $product['description'] ?></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="<?= $product['price'] ?>"><br>
        <label for="stock_count">Stock Count:</label><br>
        <input type="text" id="stock_count" name="stock_count" value="<?= $product['stock_count'] ?>"><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
