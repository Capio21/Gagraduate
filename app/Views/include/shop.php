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
#productContainer {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .product-list-item {
    flex: 0 0 calc(25% - 20px); /* Set width for each product item and consider margin */
    margin: 10px; /* Add margin between items */
    text-align: center; /* Center align the content */
}

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
        /* Selectors specific to the modal */
#buyModal {
  background-color: var(--color-background);
  border-radius: 2em;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  max-block-size: 812px;
  min-inline-size: 375px;
  padding: 2em;
}

#buyModal h2 {
  font-size: var(--font-size-h2);
  line-height: 1.2;
  margin-block: 0 0.5em;
}

#buyModal .card {
  background-color: var(--color-primary);
  color: black;
  padding: 1em;
}

#buyModal .form {
  display: grid;
  gap: 2em;
}

#buyModal .form__radios {
  display: grid;
  gap: 1em;
}

#buyModal .form__radio {
  align-items: center;
  background-color: #fefdfe;
  border-radius: 1em;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  display: flex;
  padding: 1em;
  color: black;
}

#buyModal .form__radio label {
  align-items: center;
  display: flex;
  flex: 1;
  gap: 1em;
}

#buyModal .icon {
  block-size: 1em;
  display: inline-block;
  fill: currentColor;
  inline-size: 1em;
  vertical-align: middle;
}

#buyModal .button {
  align-items: center;
  background-color: var(--color-primary);
  border-radius: 999em;
  color: black;
  display: flex;
  gap: 0.5em;
  justify-content: center;
  padding-block: 0.75em;
  padding-inline: 1em;
  transition: 0.3s;
}

#buyModal .button:focus,
#buyModal .button:hover {
  background-color: green;
}

#buyModal .button--full {
  inline-size: 100%;
}
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

//dropdown

/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}





    </style>

    <body style="height:1000px;">

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
                    <a href="/Landing" class="navbar-brand"><h1 class="text-primary display-6">MUCO FACO</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                    <a href="/user" class="nav-item nav-link active">Home</a>
                            <a href="/shop" class="nav-item nav-link">Shop</a>
                            <a href="workshop" class="nav-item nav-link">Workshop</a>
                           
                            <a href="/event" class="nav-item nav-link">Events</a>
                            
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/reports" class="nav-item nav-link">Reports</a>
                            <a href="/" class="nav-item nav-link">Sign-out</a>
                        </div>
                        <a href="#" id="openModal" class="position-relative me-4 my-auto">
    <i class="fa fa-shopping-bag fa-2x"></i>
</a>


<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Shoping Cart</p>
        <table border="1">


        <div class="container-fluid py-5 mb-5 hero-header">
       
        <div class="row">
        
            <?php foreach ($orders as $order): ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <h3 class="card-text">Username: <?= $order['Username']; ?></h3>
                            <p class="card-text">Address: <?= $order['Address']; ?></p>
                            <p class="card-text">Contact Number: <?= $order['ContactNumber']; ?></p>
                            <p class="card-text">Product Name: <?= $order['ProductName']; ?></p>
                            <p class="card-text">Image URL: <?= $order['ImageURL']; ?></p>
                            <p class="card-text">Price: <?= $order['Price']; ?></p>
                            <p class="card-text">Category: <?= $order['Category']; ?></p>
                            <p class="card-text">Status: <?= $order['status']; ?></p>
                            <!-- Add any other details you want to display -->
                            
                            <a href="/orders/delete/<?= $order['OrderID']; ?>" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </table>
        
    </div>
</div>

                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
        <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addToCartModalLabel">Add to cart</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form id="addToCartForm"> -->
            <form id="addToCartForm" action="/orders/store" method="post">
            <div class="modal-body">

            <p>Product Name: <input type="text" style="border:0px;" id="addToCartModalProductName" name="prodName" readonly></p>
<p>Price: <input type="text" style="border:0px;" id="addToCartModalPrice" name="price" readonly></p>
<img src="" id="addToCartModalImage" alt="" name="image" class="img-fluid">

            </div>
            <div class="modal-footer">
                <div class="quantity-selector">
                    <label for="quantity-product1" class="mr-2">Quantity:</label>
                    <div class="btn-group" role="group">
                        <button class="btn btn-light quantity-decrease" onclick="decreaseQuantity()">-</button>
                        <div id="current-quantity" name="quantity" class="btn btn-light quantity-value">1</div> <!-- Box to display current quantity -->
                        <button class="btn btn-light quantity-increase" onclick="increaseQuantity()">+</button>
                    </div>
                </div>
                <?php
$session = session();
$username = $session->get('username');
$full_name = $session->get('full_name');
$address = $session->get('address');
$contact_number = $session->get('contact_number');
?>
                <input type="text" name="full_name" placeholder="full_name" id="full_name" value="<?php echo $full_name; ?>"></input>
<input type="text" name="address" placeholder="Address" id="address" value="<?php echo $address; ?>">
<input type="text" name="contact_number" placeholder="Contact Number" id="contact_number" value="<?php echo $contact_number; ?>">
<input type="text" name="status" id="status" value="cart">




                <div>
              
                <h1><?php echo $full_name; ?></h1>
                </div>
            </form>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
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
   
    </div>
                <fieldset>
                    <legend>Payment Method</legend>
                    <div class="form__radios">
                        <div class="form__radio">
                            <label for="visa">
                                <svg class="icon">
                                    <use xlink:href="#icon-gcash"></use>
                                </svg>
                                Gcash
                            </label>
                            <input checked="" id="visa" name="payment-method" type="radio">
                        </div>
                        <div class="form__radio">
                            <label for="paypal">
                                <svg class="icon">
                                    <use xlink:href="#icon-cod"></use>
                                </svg>
                                COD (Cash on delivery)
                            </label>
                            <input id="paypal" name="payment-method" type="radio">
                        </div>
                <h2>Shopping Bill</h2>
                <table>
                    <tbody>
                    <div class="modal-body">
                         <tr>
                         <p>Product Name: <span id="buyModalProductName"></span></p>
                         <p>Price: <span id="buyModalPrice"></span></p>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                        <p>Total Price: 150.00<span id="buyModalTotalPrice"></span></p>  
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
            <button class="button button--full" type="button" onclick="buyProduct()">
    <svg class="icon">
        <use xlink:href="#icon-shopping-bag"></use>
    </svg>
    Buy Now
</button>
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
    
        


    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5" style="height:50px;">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7" style="position:absolute;">
                <br><br><br><br>
                    <h4 class="mb-3 text-secondary">SHOP</h4>
                    <h1 class="mb-5 display-3 text-primary">MUCO-SHOP</h1>
                </div>
                </div>
                </div>
    </div>

        
    <div class="category-container">
    <div class="category-buttons">
        <button id="allButton" class="category-button">All</button>
        <button id="womenButton" class="category-button">Plant</button>
        <button id="accessoriesButton" class="category-button">Animal</button>
        <button id="mensButton" class="category-button">Product</button>
    </div>
    <div id="productContainer" class="product-list">
        <!-- Product items will be dynamically added here -->
    </div>
</div>


    <script>
         const allButton = document.getElementById('allButton');
const womenButton = document.getElementById('womenButton');
const accessoriesButton = document.getElementById('accessoriesButton');
const mensButton = document.getElementById('mensButton');
const productContainer = document.getElementById('productContainer');

function hideOtherContainers() {
    productContainer.innerHTML = '';
}





function loadAndDisplayCategory(categoryId, container) {
    fetch(`/get-products-by-category/${categoryId}`)
        .then(response => response.json())
        .then(products => {
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

allButton.addEventListener('click', () => {
    hideOtherContainers();
    loadAndDisplayCategory([2, 3, 4], productContainer);
});

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

function openModal(productName, price, imageUrl) {
    document.getElementById('addToCartModalProductName').value = productName;
    document.getElementById('addToCartModalPrice').value = price;
    document.getElementById('addToCartModalImage').src = imageUrl;
}


function openBuyModal(productName, price, imageUrl) {
    document.getElementById('buyModalProductName').innerText = productName;
    document.getElementById('buyModalPrice').innerText = price;
    document.getElementById('buyModalImage').src = imageUrl;
}
let price = 10; // Initial price

function decreaseQuantity() {
    var currentQuantity = document.querySelector('#current-quantity');
    var currentValue = parseInt(currentQuantity.innerText);

    if (currentValue > 1) { // Ensure quantity doesn't go below 1
        currentValue--; // Decrease quantity
        price -= 10; // Decrease price
        currentQuantity.innerText = currentValue; // Update displayed quantity
        document.getElementById("addToCartModalPrice").innerText = price; // Update displayed price
    }
}

function increaseQuantity() {
    var currentQuantity = document.querySelector('#current-quantity');
    var currentValue = parseInt(currentQuantity.innerText);

    currentValue++; // Increase quantity
    price += 10; // Increase price
    currentQuantity.innerText = currentValue; // Update displayed quantity
    document.getElementById("addToCartModalPrice").innerText = price; // Update displayed price
}
function buyProduct() {
    const productName = document.getElementById('buyModalProductName').innerText;
    const price = document.getElementById('buyModalPrice').innerText;

    // Make AJAX request to the controller method
    fetch('/purchase/buyProduct', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            productName: productName,
            price: price
            // Add other fields as needed
        }),
    })
    .then(response => {
        if (response.ok) {
            // Handle success
            console.log('Purchase successful');
        } else {
            // Handle error
            console.error('Failed to purchase product');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
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
    <script>
        document.getElementById("openModal").addEventListener("click", function() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
});

document.getElementsByClassName("close")[0].addEventListener("click", function() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
});

// Function to add items to the cart and display in the modal
function addToCart(productName) {
    var cartItems = document.getElementById("cartItems");
    var listItem = document.createElement("li");
    listItem.textContent = productName;
    cartItems.appendChild(listItem);
}

    </script>
    </body>

</html>