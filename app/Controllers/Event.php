<?php

namespace App\Controllers;


use App\Models\EventModel;
use App\Controllers\BaseController;

class Event extends BaseController
{
    public function index()
    {
        $model = new EventModel();
        $data['events'] = $model->findAll();
        return view('events/index', $data);
    }

    public function create()
    {
        return view('events/create');
    }

    public function store()
    {
        $model = new EventModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'time' => $this->request->getPost('time'),
            'location' => $this->request->getPost('location')
        ];
        $model->insert($data);
        return redirect()->to('create');
    }

    public function edit($id)
    {
        $model = new EventModel();
        $data['event'] = $model->find($id);
        return view('events/edit', $data);
    }

    public function update($id)
    {
        $model = new EventModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'time' => $this->request->getPost('time'),
            'location' => $this->request->getPost('location')
        ];
        $model->update($id, $data);
        return redirect()->to('/event');
    }

    public function delete($id)
    {
        $model = new EventModel();
        $model->delete($id);
        return redirect()->to('/event');
    }
}