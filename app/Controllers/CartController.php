<?php

namespace App\Controllers;
use App\Models\CartModel;
use App\Models\MainModel;
use App\Controllers\BaseController;

class CartController extends BaseController
{
    public function cart()
    {
        
$data = [
    'prodName' =>$this->request->getPost('prodName'),
    'quantity' =>$this->request->getPost('quantity'),
    'price' =>$this->request->getPost('price'),
    'image' =>$this->request->getPost('image'),
];
$main = new CartModel();
$main->button($data);
return view('/cart');
    }

    public function add()
    {
        // Get data from the request
        $productName = $this->request->getPost('prodName');
        $price = $this->request->getPost('price');
        $quantity = $this->request->getPost('quantity');
        $image = $this->request->getPost('image');
        $category = $this->request->getPost('category'); // Assuming category is sent from the frontend
        $userId = $this->request->getPost('user_id'); // Assuming user_id is sent from the frontend

        // Create an instance of the CartModel
        $cartModel = new CartModel();

        // Insert data into the database
        $data = [
            'prodName' => $productName,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $image,
            'category' => $category,
            'user_id' => $userId
        ];

        $cartModel->insert($data);

        // Return a response (you can customize this based on your needs)
        return $this->response->setJSON(['message' => 'Item added to cart successfully']);
    }
}
    


