<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
    public function welcome()
    {
        $products = Product::all();
        return view('welcome')->with(compact('products')); // regeresa la vista principal y la muestra. Tambien envia un arreglo con los Productos
    }
    
}
