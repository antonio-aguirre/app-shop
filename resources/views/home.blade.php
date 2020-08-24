@extends('layouts.app')

@section('page-title','App Shop | Dashboard')

@section('body-class','product-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1549281899-f75600a24107?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80');"></div>

    
    <div class="main main-raised">
        <div class="container" >

            <div class="section">
            
                <h2 class="title" style="text-align:center;">Dashboard</h2>

               
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                    <li>
                        <a href="#dashboard" role="tab" data-toggle="tab">
                            <i class="material-icons">shopping_cart</i>
                            Carrito de compras
                        </a>
                    </li>
                    <li>
                        <a href="#tasks" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos realizados
                        </a>
                    </li>
                </ul>
                
            </div>

        </div>
    </div>
    

    @include('includes.footer')

@endsection    
