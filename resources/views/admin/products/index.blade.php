@extends('layouts.app')

@section('page-title')
<title>Listado de productos</title>
@endsection

@section('body-class','landing-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1549281899-f75600a24107?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80');">
        
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Listado de productos</h2>

                <div class="team">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="col-md-3" style="text-align:center">Nombre</th>
                                    <th class="col-md-4" style="text-align:center">Descripción</th>
                                    <th class="text-center">Categoría</th>
                                    <th class="text-right">Precio</th>
                                    <th class="col-md-2" style="text-align:center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?> <!--Contador de número de productos-->
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center">{{ $count }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td class="text-right"> ${{ $product->price }}</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="copyright right">
                &copy; 2020, made with <i class="fa fa-heart heart"></i> by Antonio
            </div>
        </div>
    </footer>

@endsection    