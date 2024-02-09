<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .category-buttons {
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        .category-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .category-button {
            background-color: #fff;
            color: #555;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .category-button:hover {
            background-color: #ff0000;
            color: #fff;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
        }

        .product-list-item {
            width: calc(33.33% - 10px);
            margin-right: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd; /* Add a border for clarity */
            padding: 10px;
            text-align: center;
        }

        .product-button {
            background-color: #009933;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .product-button:hover {
            background-color: #007722;
        }
    </style>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                   
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/Landing" class="navbar-brand"><h1 class="text-primary display-6">MUCO SHOP</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/user" class="nav-item nav-link active">Home</a>
                            <a href="" class="nav-item nav-link">Shop</a>
                            <a href="/Workshop" class="nav-item nav-link">Workshop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="/cart" class="dropdown-item">Cart</a>
                                    <a href="/checkout" class="dropdown-item">Chackout</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            <a href="/user" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                            <a href="#" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
        <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToCartModalLabel">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Product Name: <span id="addToCartModalProductName"></span></p>
                <p>Price: <span id="addToCartModalPrice"></span></p>
                <img src="" id="addToCartModalImage" alt="" width="450" height="200" />
            </div>
            <div class="modal-footer">
                <div class="quantity-selector">
                    <label for="quantity-product1">Quantity:</label>
                    <input type="number" id="quantity-product1" name="quantity-product1" value="1" min="1">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Add to Cart</button>
                <div class="d-flex align-items-end"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyModalLabel">Buy Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Product Name: <span id="buyModalProductName"></span></p>
                <p>Price: <span id="buyModalPrice"></span></p>
                <img src="" id="buyModalImage" alt="" width="450" height="200" />
            </div>
            <div class="modal-footer">
                <div class="quantity-selector">
                    <label for="quantity-product2">Quantity:</label>
                    <input type="number" id="quantity-product2" name="quantity-product2" value="1" min="1">
                </div>
                <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</div>



<script>
    // Sample data for cart items (replace with actual data)
    const cartItems = [
        { id: 1, name: "Product 1", quantity: 2 },
        { id: 2, name: "Product 2", quantity: 1 },
        { id: 3, name: "Product 3", quantity: 3 }
    ];

    // Function to populate cart list inside the collapsible div
    function populateCartList() {
        const cartItemList = document.getElementById('cartItemList');
        cartItemList.innerHTML = ''; // Clear existing items

        // Loop through cart items and create list items
        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = `${item.name} - Quantity: ${item.quantity}`;
            cartItemList.appendChild(listItem);
        });
    }

    // Event listener to populate cart list when the bag icon is clicked
    document.querySelector('.fa-shopping-bag').addEventListener('click', populateCartList);
</script>

                </div>
            </div>
        </div>
    </div>
    
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="category-container">
        <div class="category-buttons">
            <button id="womenButton" class="category-button">Plant</button>
            <button id="accessoriesButton" class="category-button">Animal</button>
            <button id="mensButton" class="category-button">Product</button>
        </div>

        <div id="productContainer" class="product-list"></div>
    </div>

    <script>
        const womenButton = document.getElementById('womenButton');
        const accessoriesButton = document.getElementById('accessoriesButton');
        const mensButton = document.getElementById('mensButton');

        const productContainer = document.getElementById('productContainer');

        function hideOtherContainers() {
            productContainer.innerHTML = '';
        }

        womenButton.addEventListener('click', () => {
            hideOtherContainers();
            loadAndDisplayCategory(2, productContainer);
        });

        accessoriesButton.addEventListener('click', () => {
            hideOtherContainers();
            loadAndDisplayCategory(3, productContainer);
        });

        mensButton.addEventListener('click', () => {
            hideOtherContainers();
            loadAndDisplayCategory(4, productContainer);
        });

        function loadAndDisplayCategory(categoryId, container) {
    // Use AJAX to fetch records based on categoryId and update the container
    fetch(`/get-products-by-category/${categoryId}`)
        .then(response => response.json())
        .then(products => {
            // Loop through the products and add them to the list
            products.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('product-list-item');
                productDiv.innerHTML = `
                    <p>Product Name: ${product.product_name}</p>
                    <p>Price: ${product.price}</p>
                    <img src="${product.image_url}" alt="Product Image" width="150" height="180" />
                    <button class="product-button" data-toggle="modal" data-target="#addToCartModal" onclick="openModal('${product.product_name}', '${product.price}', '${product.image_url}')">Add to Cart</button>
                    <button class="product-button" data-toggle="modal" data-target="#buyModal" onclick="openBuyModal('${product.product_name}', '${product.price}', '${product.image_url}')">Buy Now</button>
                `;
                container.appendChild(productDiv);
            });
        })
        .catch(error => {
            console.error(error);
            container.innerHTML = 'Failed to load products.';
        });
}

function openModal(productName, price, imageUrl) {
    document.getElementById('addToCartModalProductName',).innerText = productName;
    document.getElementById('addToCartModalPrice').innerText = price;
    document.getElementById('addToCartModalImage').src = imageUrl;
}

function openBuyModal(productName, price, imageUrl) {
    document.getElementById('buyModalProductName').innerText = productName;
    document.getElementById('buyModalPrice').innerText = price;
    document.getElementById('buyModalImage').src = imageUrl;
}



        
        
    </script>

    

        <!-- Modal Search Start -->
        <
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>