<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function register()
    {
        helper(['form']);
        $data = [];
        echo view('Register', $data);
    }

    public function admin_register()
    {
        helper(['form']);
        $data = [];
        echo view('admin_register', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[4]|max_length[50]|is_unique[users.username]',
            'password' => 'required|min_length[4]|max_length[100]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'full_name'  => $this->request->getVar('full_name'),
                'address'  => $this->request->getVar('address'),
                'contact_number'  => $this->request->getVar('contact_number'),
                'date_of_birth'  => $this->request->getVar('date_of_birth'),
                'gender'  => $this->request->getVar('gender'),
                'occupation'  => $this->request->getVar('occupation'),
                'membership_type'  => $this->request->getVar('membership_type'),
                'date_joined'  => $this->request->getVar('date_joined'),
                'token' => bin2hex(random_bytes(16)) // Generating a unique token
            ];
            $userModel->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('Register', $data);
        }
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        
        if ($data['user'] === null) {
            return redirect()->to('/members'); // Redirect if user not found
        }
    
        echo view('members/edit_user', $data);
    }

    public function update($id)
    {
        helper(['form']);
        $rules = [
            // Define your update validation rules here
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                // Assign your updated data here
            ];
            $userModel->update($id, $data);
            return redirect()->to('/members');
        } else {
            $data['validation'] = $this->validator;
            echo view('members/edit_user', $data);
        }
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/members');
    }
}
