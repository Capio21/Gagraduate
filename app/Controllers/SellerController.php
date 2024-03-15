<?php

namespace App\Controllers;

use App\Models\SellerModel;

class SellerController extends BaseController
{
    public function index()
    {
        $model = new SellerModel();
        $data['products'] = $model->findAll();
        return view('seller/index', $data);
    }
   
    public function create()
    {
        return view('seller/create');
      
    }

    public function sellerAdmin()
    {
        return view('seller/sellerAdmin');
    }

    public function store()
    {
        $model = new SellerModel();
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
            $data = [
                'product_name' => $this->request->getPost('product_name'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'stock_count' => $this->request->getPost('stock_count'),
                'image' => '/uploads/' . $newName
            ];
            $model->insert($data);
            return redirect()->to('/seller');
        }
    }

    public function edit($id)
    {
        $model = new SellerModel();
        $data['product'] = $model->find($id);
        return view('seller/edit', $data);
    }

    public function update($id)
    {
        $model = new SellerModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock_count' => $this->request->getPost('stock_count'),
            'image' => '/uploads/' . $newName
        ];
        $model->update($id, $data);
        return redirect()->to('/seller');
    }

    public function delete($id)
    {
        $model = new SellerModel();
        $model->delete($id);
        return redirect()->to('/seller');
    }
}
