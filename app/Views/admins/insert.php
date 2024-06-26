<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css">
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
            <a class="navbar-brand" href="/">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i>&nbsp;Hello Admin</a></li>
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

<li class="nav-item side-bar tmargin"><a class="nav-link" href="/admin"><i
            class="bi bi-house"></i>&nbsp;Dashboard</a></li>
<li class="nav-item side-bar"><a class="nav-link" href="/members"><i
            class="bi bi-flag"></i>&nbsp;Member Master List </a></li>
<li class="nav-item side-bar"><a class="nav-link" href="/insert"><i
            class="bi bi-star"></i>&nbsp;Add Product</a></li>
<li class="nav-item side-bar"><a class="nav-link" href="create"><i
            class="bi bi-person-circle"></i>&nbsp;Add Events</a></li>
<li class="nav-item side-bar"><a class="nav-link" href="admin_register"><i
            class="bi bi-person-check"></i>&nbsp;Register a User/Member</a></li>           

<li class="nav-item side-bar"><a class="nav-link" href="Admin_index"><i
            class="bi bi-gear"></i>&nbsp;Add WorkShop</a></li>


</ul>
                    <!-- ... other menu items ... -->
                </ul>
            </nav>

             <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4 animated bounce" style="margin-right:110px;">
                <h1 class="page-header">Add Product</h1>
               
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><i class="bi bi-house-door"></i>&nbsp;Home</li>
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-list"></i>Dashboard</a></li>
                </ul>
                <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Insert into Products Table</h2>
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name:</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category:</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <br>

        <h2 style = text-align:center;>Products List</h2>
        <br>
        <table class="table table-striped table-bordered compact-table">
    <!-- Table header outside the scrollable container -->
    <thead class="thead-dark">
        
    </thead>
    <tbody>
        <!-- Table content goes here -->
    </tbody>
</table>

        <!-- Wrap the table body in a div with scrollbar -->
        <div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url() . '/' . $product['image_url'] ?>" class="card-img-top" alt="Product Image" style="max-height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['product_name'] ?></h5>
                    <p class="card-text">Price: <?= $product['price'] ?></p>
                    <p class="card-text">Category: <?= $product['category_id'] ?></p>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-danger" onclick="deleteProduct(<?= $product['id'] ?>)">Delete</button>
                        <a href="/update/<?= $product['id'] ?>" class="btn btn-warning">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


    </div>

    <!-- JavaScript for deleting products -->
    <script>
        function deleteProduct(productId) {
            if (confirm("Are you sure you want to delete this product?")) {
                // Send an AJAX request to delete the product
                fetch(`/delete/${productId}`, {
                    method: 'DELETE',
                })
                .then(response => {
                    if (response.status === 200) {
                        // Product deleted successfully, remove it from the table
                        const row = document.querySelector(`tr[data-product-id="${productId}"]`);
                        if (row) {
                            row.remove();
                        }
                    } else {
                        alert('Failed to delete the product.');
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred while deleting the product.');
                });
            }
        }
    </script>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Logout Modal -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
