<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        // regeresa la vista y la muestra. Tambien envia un arreglo con los Productos
        return view ('admin.products.index')->with(compact('products')); // permitirá ver el listado de productos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.products'); // permitirá ver el formulario de registro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //registrar el nuevo producto en la base de datos
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->long_description = $request->long_description;

        if($product->save())
        {
            Session::flash('message','Se ha realizado el registro con éxito'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert-success');
            return redirect('/admin/products');

        }else
        {
            Session::flash('message','Se ha producido un inconveniente en el registro'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert-warning');
            return redirect('/admin/products');
        }
        
        dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
