<?php

namespace App\Controllers;

use App\Models\PurchaseModel;
use CodeIgniter\API\ResponseTrait;

class PurchaseController extends BaseController
{
    use ResponseTrait;

   // Method to handle insertion of purchase data
public function buyProduct()
{
    // Retrieve data from POST request
    $productName = $this->request->getPost('productName');
    $price = $this->request->getPost('price');

    // Insert data into database table
    $purchaseModel = new PurchaseModel();
    $data = [
        'product_name' => $productName,
        'price' => $price,
        // Add other fields as needed
    ];

    try {
        // Insert data into database
        $inserted = $purchaseModel->insert($data);

        if ($inserted) {
            // Return success response
            return $this->response->setJSON(['message' => 'Purchase successful']);
        } else {
            // Return error response
            return $this->response->setStatusCode(500)->setJSON(['error' => 'Failed to save purchase data']);
        }
    } catch (\Exception $e) {
        // Log the error or return it as response for debugging
        return $this->response->setStatusCode(500)->setJSON(['error' => $e->getMessage()]);
    }
}
}