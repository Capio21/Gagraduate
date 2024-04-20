<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\DocumentaryModel;
class HomeController extends BaseController
{


  public function index()
  {
      $categoryModel = new CategoryModel();
      $documentaryModel = new DocumentaryModel();
  
      $data['categories'] = $categoryModel->findAll();
      $data['documentaries'] = $documentaryModel->findAll();
  
      return view('template/index', $data);
    }
  

    // Add a new method to fetch products by category
    public function getProductsByCategory($categoryId)
    {
        $productModel = new ProductModel();
        $products = $productModel->where('category_id', $categoryId)->findAll();
        return json_encode($products);
    }
    
}
