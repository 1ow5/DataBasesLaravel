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
    public function create(){
        return view('products.create');
    }
    public function store(Request $request,Product $product){
        $data=$request->validate(['title' => 'string', 'price' => 'decimal:0,2|max:100000|min:0|required','discription' => 'string']);// валидация
        
        $product->create($data);//создаём новую запись в бд
        return redirect()->back();
    }
    
}
