@extends('layouts.app')

@section('page-title','Listado de productos')

@section('body-class','product-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1549281899-f75600a24107?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80');"></div>

    
    <div class="main main-raised">
        <div class="container" >

            <div class="section">
            
                <h2 class="title" style="text-align:center;">Listado de productos</h2>

                <!--Boton para abrir el modal y agregar un producto-->
                <a class="btn btn-success btn-round" rel="tooltip" title="Agregar producto" data-toggle="modal" data-target="#createProduct" style="margin:20px auto; text-align:center; display:block; width:100px;" >
                    <i class="fa fa-plus"></i>
                </a>
                
                @include('admin.products.create') <!-- se cargará el modal con el formulario para crear un producto-->
                
                <!-- Mensajes de alerta por validaciones -->
                @if ($errors->any())
                    <div class="alert alert-danger" style="border-radius: 6px; text-align:left;">
                        <div class="container-fluid">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>    
                    </div>
                @endif

                <!-- Para los mensajes y mande su alerta -->
                @if (Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }} col-xs-12 black-text alert-dismissable" ng-if="message" style="border-radius: 6px;">
                    <div class="container-fluid">
                        <strong><li>{{ Session::get('message') }}</li></strong>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                </div>
                @endif

                <div class="team">
                    <div class="table-responsive text-center">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="col-md-3" style="text-align:center">Nombre</th>
                                    <th class="col-md-4" style="text-align:center">Descripción</th>
                                    <th class="text-center">Categoría</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $count => $product )
                                    <tr>
                                        <td class="text-center">{{ $products->firstItem() + $count }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->category ? $product->category->name : 'General' }}</td> <!--Si el producto no tiene una categoria, se pone 'General' pero solo en el listado, no en la BD-->
                                        <td class="text-right"> ${{ $product->price }}</td>
                                        <td>
                                            
                                            <a rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs" data-toggle="modal" data-target="#infoProduct{{$product->id}}">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            @include('admin.products.info')<!--Se añade el modal para mostrar la información de los productos-->
                                        
                                            <a rel="tooltip" title="Editar producto" class="btn btn-warning btn-simple btn-xs" data-toggle="modal" data-target="#editProduct{{$product->id}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @include('admin.products.update')

                                            <!--<span>
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                
                                                <a href="{{ route('products.destroy', ['id' => $product->id]) }}" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </span>-->

                                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post" >
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach   
                            </tbody>
                        </table>
                        {{ $products->render() }} <!-- se pone para realizar la paginación que se define en el modelo de productos -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    @include('includes.footer')

@endsection    