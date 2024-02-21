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
}
    


