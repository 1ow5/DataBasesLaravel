<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all(); // выбираем все строки и записи из таблицы products в проекте это обращение к папке Models
        return view('products.index', compact('products')); // 

    }
}
