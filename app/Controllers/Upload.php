<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UploadModel;

class Upload extends BaseController
{
    public function index()
    {
        return view('Uploads/upload_form');
    }
    public function upload()
    {
        $model = new UploadModel();
        $data['uploads'] = $model->findAll();
        return view('Uploads/index', $data);
    }
   

    public function do_upload()
    {
        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);

            $model = new UploadModel();
            $data = [
                'file_name' => $file->getName(),
                'file_path' => 'uploads/' . $newName
            ];
            $model->insert($data);

            return redirect()->to('/upload/success');
        } else {
            return redirect()->to('/upload/failure');
        }
    }

    public function success()
    {
        return view('Uploads/upload_success');
    }

    public function failure()
    {
        return view('Uploads/upload_failure');
    }
}
