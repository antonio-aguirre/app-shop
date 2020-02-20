<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        return view('welcome'); // regeresa la vista principal y la muestra
    }
    
}
