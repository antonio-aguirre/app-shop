<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
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
        //return view ('admin.products'); // permitirá ver el formulario de registro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar datos
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del producto',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
            'description.required' => 'Es necesaria una descripción breve',
            'description.max' => 'Se debe de tener un máximo de 200 caracteres',
            'price.required' => 'Es necesario incluir el precio del producto',
            'price.numeric' => 'Solo se admiten valores númericos en el precio',
            'price.min' => 'No se admiten valores negativos en el precio',
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

        //registrar el nuevo producto en la base de datos
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->long_description = $request->long_description;

        if($product->save())
        {
            Session::flash('message','Se ha realizado el registro con éxito'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert alert-success');
            //return redirect('/admin/products');
            return back();

        }else
        {
            Session::flash('message','Se ha producido un inconveniente en el registro'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert alert-warning');
            //return redirect('/admin/products');
            return back();
        }
        
        //dd($request->all());

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
        //Validar datos
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del producto',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
            'description.required' => 'Es necesaria una descripción breve',
            'description.max' => 'Se debe de tener un máximo de 200 caracteres',
            'price.required' => 'Es necesario incluir el precio del producto',
            'price.numeric' => 'Solo se admiten valores númericos en el precio',
            'price.min' => 'No se admiten valores negativos en el precio',
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

        //$url = URL::full($request);
        //dd($url);
        
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->long_description = $request->long_description;

        if($product->save())
        {
            Session::flash('message','Se ha realizado la modificación con éxito'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert alert-success');
            //return redirect('/admin/products');
            return back();

        }else
        {
            Session::flash('message','Se ha producido un inconveniente en la modificación'); //primer palabra es el nombre que tendra la variable y se usara para mostrar el mensaje en index.blade.php
            Session::flash('alert-class','alert alert-warning');
            //return redirect('/admin/products');
            //return redirect('$url');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * $product = Poroduct::find($id);
         * $product->delete();
        */
        
        if(Product::destroy($id)) {
          Session::flash('message','Producto eliminado');
          Session::flash('alert-class','alert alert-success');
          return redirect('/admin/products');
        }else
        {
            Session::flash('message','Se ha produciodo un inconveniente en la eliminación');
            Session::flash('alert-class','alert alert-warning');
            return back(); // solo se redirecciona a la página anterior
        }
    }
}
