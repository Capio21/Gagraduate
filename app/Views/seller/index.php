
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            padding-top: 80px;
        }

        #sidebar {
            position: fixed;
            top: 50px;
            left: 0;
            width: 220px;
            border: none;
            border-radius: 0;
            overflow-y: auto;
            background-color: #222;
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-bar li a {
            color: #eee;
            width: 220px;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .side-bar li a:hover,
        .side-bar li a:focus {
            background-color: #333;
        }

        .tmargin {
            margin-top: 15px;
        }


        
 
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/seller/sellerAdmin">Seller Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto">
                   
                    


<!-- Your HTML content -->
<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#adminWelcomeModal"><i class="bi bi-person"></i>&nbsp;Hello Seller</a></li>




                    <li class="nav-item active"><a class="nav-link" title="View Website" href="#"><i class="bi bi-globe"></i></a></li>
                    <!-- Logout Modal -->
                    <li class="nav-item"><a class="nav-link" href="/" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="/joining"  class="bi bi-box-arrow-right"></i>Joining List</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3">
                <div class="container-fluid tmargin">
                    <div class="input-group">
                        <button class="btn btn-default"><i class="bi bi-search"></i></button>
                    </div>
                </div>

                <ul class="nav flex-column side-bar">

<li class="nav-item side-bar tmargin"><a class="nav-link" href="/seller/sellerAdmin"><i
            class="bi bi-house"></i>&nbsp;Dashboard</a></li>
            <li class="nav-item side-bar tmargin"><a class="nav-link" href="/seller"><i
            class="bi bi-house"></i>&nbsp;Inventory Updates Stock</a></li>





</ul>
                    <!-- ... other menu items ... -->
                </ul>
            </nav>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="/" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
             <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4 animated bounce" style="margin-right:110px;">
                <h1 class="page-header">Seller Dashboard</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><i class="bi bi-house-door"></i>&nbsp;Home</li>
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-list"></i>Seller Dashboard</a></li>
                </ul>
                <!-- Include Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">


<br>

<body>
<div class="container mt-5">
        <h1 class="mb-4">Add Product to Inventory</h1>
        <form action="/seller/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="stock_count">Stock Count:</label>
                    <input type="text" class="form-control" id="stock_count" name="stock_count" required>
                </div>
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>


    
</body>

<br><br><br>
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search products..." onkeyup="searchProducts()">
    
    <h1>Product List</h1>
    
    <div class="row" id="productList">
        <?php foreach ($products as $product): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['product_name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product_name'] ?></h5>
                        <p class="card-text"><?= $product['description'] ?></p>
                        <p class="price">₱<?= number_format($product['price'], 2) ?></p>
                        <p class="card-text">Stock: <?= $product['stock_count'] ?></p>
                        <div class="action">
                            <a href="/seller/edit/<?= $product['id'] ?>" class="btn btn-primary mr-2">Edit</a>
                            <a href="/seller/delete/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function addToCart(productId) {
        if (confirm('Add this product to cart?')) {
            // You can make an AJAX request here to add the product to the cart
            // and update the stock count accordingly
            window.location.href = '/seller/add_to_cart/' + productId;
        }
    }

    function searchProducts() {
        var input, filter, productList, product, productName, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        productList = document.getElementById('productList');
        product = productList.getElementsByClassName('card');

        for (i = 0; i < product.length; i++) {
            productName = product[i].getElementsByClassName('card-title')[0];
            txtValue = productName.textContent || productName.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                product[i].style.display = "";
            } else {
                product[i].style.display = "none";
            }
        }
    }
</script>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
