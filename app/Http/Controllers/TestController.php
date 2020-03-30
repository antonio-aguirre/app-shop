<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class TestController extends Controller
{
    public function welcome()
    {
        $products = Product::paginate(10);
        return view('welcome')->with(compact('products')); // regeresa la vista principal y la muestra. Tambien envia un arreglo con los Productos
        $word = "Hello";
        Session::put('word',$word);
    }
    
}
