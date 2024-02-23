<?php

namespace App\Controllers;

use App\Models\WorkshopModel;
use CodeIgniter\Controller;

class Workshop extends Controller
{
    public function index()
    {
        $model = new WorkshopModel();
        $data['workshops'] = $model->findAll();
        return view('workshop/index', $data);
    }

    public function Admin_index()
    {
        $model = new WorkshopModel();
        $data['workshops'] = $model->findAll();
        return view('workshop/Admin_index', $data);
    }

    public function create()
    {
        return view('workshop/create');
    }

    public function store()
    {
        $model = new WorkshopModel();

        // Handle file upload
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $imageName);

        // Prepare data to insert
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'image_url' => 'uploads/' . $imageName,
            'additional_info' => $this->request->getPost('additional_info')
        ];

        $model->insert($data);
        return redirect()->to('workshop/create');
    }

    public function edit($id)
    {
        $model = new WorkshopModel();
        $data['workshop'] = $model->find($id);
        return view('workshop/edit', $data);
    }

    public function update($id)
    {
        $model = new WorkshopModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('workshop/edit');
    }

    public function delete($id)
    {
        $model = new WorkshopModel();
        $model->delete($id);
        return redirect()->to('/workshop');
    }
}
