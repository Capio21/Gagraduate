<?php

namespace App\Controllers;

use App\Models\OrdersModel;
use CodeIgniter\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $ordersModel = new OrdersModel();
        $data['orders'] = $ordersModel->findAll();

        return view('orders/index', $data);
    }

    public function index_cart()
    {
        $ordersModel = new OrdersModel();
        $data['cart'] = $ordersModel->findAll();
    
        return view('include/shop', );
    }

    public function create()
    {
        return view('orders/create');
    }

    public function store()
    {
        $ordersModel = new OrdersModel();

        // Extracting data from POST
        $data = [
            'ProductName' => $this->request->getPost('prodName'),
            'Price' => $this->request->getPost('price'),
            'ImageURL' => $this->request->getPost('image'),
            'quantity' => $this->request->getPost('quantity'),
            'Username' => $this->request->getPost('full_name'),
            'Address' => $this->request->getPost('address'),
            'ContactNumber' => $this->request->getPost('contact_number'),
            'status' => $this->request->getPost('status')
        ];

        // Insert data into the database
        $ordersModel->insert($data);

        return redirect()->to('/shop');
    }

    public function edit($id)
    {
        $ordersModel = new OrdersModel();
        $data['order'] = $ordersModel->find($id);

        return view('orders/edit', $data);
    }

    public function update($id)
    {
        $ordersModel = new OrdersModel();
        $ordersModel->update($id, $this->request->getPost());

        return redirect()->to('/orders');
    }

    public function delete($id)
    {
        $ordersModel = new OrdersModel();
        $ordersModel->delete($id);

        return redirect()->to('/shop');
    }

    public function admin_orders()
    {
        return view('order/admin_orders');
    }

    public function shop()
    {
        $ordersModel = new OrdersModel();
        $cart['orders'] = $ordersModel->findAll();
        echo view('include/shop', $cart); // Pass $cart instead of just 'include/shop'
    }

    
}
