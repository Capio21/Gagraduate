<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DocumentaryModel;
use Dompdf\Dompdf;


class Documentaries extends BaseController
{
    public function index()
    {
        $model = new DocumentaryModel();
        $data['documentaries'] = $model->findAll();
        return view('documentaries/index', $data);
    }

    public function create()
    {
        return view('documentaries/create');
    }

   
    public function edit($id)
{
    $model = new DocumentaryModel();
    $data['documentary'] = $model->find($id);
    return view('documentaries/edit', $data);
}
public function store()
{
    helper(['form', 'url']);

    $model = new DocumentaryModel();

    // Handle image upload
    $image = $this->request->getFile('image');
    if ($image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);
        $data['image'] = $newName;
    }

    $data += [
        'title' => $this->request->getVar('title'),
        'description'  => $this->request->getVar('description'),
        'date'  => $this->request->getVar('date'),
    ];

    // Save data
    $model->insert($data);

    return redirect()->to('/documentaries');
}

public function update($id)
{
    helper(['form', 'url']);

    $model = new DocumentaryModel();

    // Handle image upload
    $image = $this->request->getFile('image');
    if ($image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);
        $data['image'] = $newName;
    }

    $data += [
        'title' => $this->request->getVar('title'),
        'description'  => $this->request->getVar('description'),
        'date'  => $this->request->getVar('date'),
    ];

    // Save data
    $model->update($id, $data);

    return redirect()->to('/documentaries');
}
public function delete($id)
{
    $model = new DocumentaryModel();
    
    // Find the documentary by ID
    $documentary = $model->find($id);
    
    // Delete the associated image file
    if ($documentary['image'] != null) {
        $imagePath = ROOTPATH . 'public/uploads/' . $documentary['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    
    // Delete the documentary from the database
    $model->delete($id);
    
    return redirect()->to('/documentaries');
}
public function generateReport()
    {
        // Load the model to fetch data (assuming you have a model named DocumentaryModel)
        $model = new \App\Models\DocumentaryModel();
        $data['documentaries'] = $model->findAll(); // Fetch all documentaries

        // Load the report view file and pass data to it
        $content = view('documentaries/report', $data);

        // Generate and output the PDF report
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($content);
        $dompdf->setPaper('A4', 'landscape'); // Optional: Set paper size and orientation (e.g., landscape)
        $dompdf->render();
        $dompdf->stream('documentaries_report.pdf', ['Attachment' => true]);
    }

}



