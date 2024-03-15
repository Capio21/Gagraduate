<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username' => $session->get('username'),
            'full_name' =>  $session->get('full_name'),// Replace this with the actual logic to get the email
        ];
        echo view('template/index', $data);
    }
}