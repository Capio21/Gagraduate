<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\OrdersModel;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username' => $session->get('username'),
            'full_name' =>  $session->get('full_name'),
            'contact_number' =>  $session->get('contact_number'),
            'address' =>  $session->get('address'),
        ];
        echo view('template/index', $data);
    }
    
    
    
}