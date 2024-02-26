<?php

namespace App\Controllers;

use App\Models\JoiningModel;
use CodeIgniter\Controller;

class Joining extends Controller
{
    public function index()
    {
        $model = new JoiningModel();
        $data['joining'] = $model->findAll();
        
        return view('joining/index', $data);
    }

    public function create()
    {
        return view('joining/create');
    }

    public function store()
    {
        $model = new JoiningModel();
        $model->save($_POST);
        return redirect()->to('/workshop');
    }

    public function edit($id = null)
    {
        $model = new JoiningModel();
        $data['joining'] = $model->find($id);
        
        return view('joining/edit', $data);
    }

    public function update()
    {
        $model = new JoiningModel();
        $model->update($_POST['id'], $_POST);
        return redirect()->to('/joining');
    }

    public function delete($id = null)
    {
        $model = new JoiningModel();
        $model->delete($id);
        return redirect()->to('/joining');
    }
}
