<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;

class SigninController extends BaseController
{
    public function login()
    {
        helper(['form']);
        echo view('signin');
    }

    public function loginAuth()
{
    $session = session();
    $userModel = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    if (empty($username) || empty($password)) {
        $session->setFlashdata('msg', 'Both username and password are required.');
        return redirect()->to('/');
    }

    $data = $userModel->where('username', $username)->first();

    if ($data) {
        $hashedPassword = $data['password'];

        if ($username === 'admin' && password_verify($password, $hashedPassword)) {
            // Redirect admin to /insert
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'full_name' => $data['full_name'], // Store full_name in session
                'contact_number' => $data['contact_number'], // Store full_name in session
                'address' => $data['address'], // Store full_name in session
                'isLoggedin' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/admin');
        } else if ($username === 'seller' && password_verify($password, $hashedPassword)) {
            // Redirect sellers to their specific page
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'full_name' => $data['full_name'], // Store full_name in session
                'contact_number' => $data['contact_number'], // Store full_name in session
                'address' => $data['address'], // Store full_name in session
                'isLoggedin' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/seller/sellerAdmin');
        } else if (password_verify($password, $hashedPassword)) {
            // Redirect regular users to /user
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'full_name' => $data['full_name'], // Store full_name in session
                'contact_number' => $data['contact_number'], // Store full_name in session
                'address' => $data['address'], // Store full_name in session
                'isLoggedin' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/user');
        } else {
            $session->setFlashdata('msg', 'Password is incorrect.');
            return redirect()->to('/');
        }
    } else {
        $session->setFlashdata('msg', 'Username does not exist.');
        return redirect()->to('/');
    }
}

    
}
