<?php

namespace App\Controllers;
use App\Models\CartModel;
use App\Controllers\BaseController;

class CartController extends BaseController
{
    public function cart()
    {
        
       $main = new CartModel();
       $data['prodName'] = $main->findAll();
       return view ('shop', $data);

        
  


    // Retrieve product details from the POST request
    $productName = $this->request->getPost('productName');
    $price = $this->request->getPost('price');
    $imageUrl = $this->request->getPost('imageUrl');

    // Save the product to the database
    $productData = [
        'product_name' => $productName,
        'price' => $price,
        'image_url' => $imageUrl
    ];
    
    if ($productModel->save($productData)) {
        return $this->respondCreated(['message' => 'Product added to cart successfully']);
    } else {
        return $this->failServerError('Failed to add product to cart');
  
      }  }
}

