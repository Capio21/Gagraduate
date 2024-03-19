<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders List</title>
</head>
<body>
    <h1>Orders List</h1>
    <a href="/orders/create">Add New Order</a>
    <table border="1">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Username</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Product Name</th>
                <th>Image URL</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order['OrderID']; ?></td>
                    <td><?= $order['Username']; ?></td>
                    <td><?= $order['Address']; ?></td>
                    <td><?= $order['ContactNumber']; ?></td>
                    <td><?= $order['ProductName']; ?></td>
                    <td><?= $order['ImageURL']; ?></td>
                    <td><?= $order['Price']; ?></td>
                    <td><?= $order['Category']; ?></td>
                    <td>
                        <a href="/orders/edit/<?= $order['OrderID']; ?>">Edit</a>
                        <a href="/orders/delete/<?= $order['OrderID']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
