@extends('layouts.app')

@section('page-title')
<title>App shop</title>
@endsection

@section('body-class','landing-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1511556820780-d912e42b4980?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Bienvenido a APP-SHOP 🛍</h1>
                    <h4>Realización de pedidos en linea</h4> 
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Let's talk product</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Atendemos tus dudas</h4>
                                <p>
                                    No estas solo, atenderemos tus inquietudes, solo escribenos!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Pago seguro</h4>
                                <p>
                                    Todo pedido que realices será confirmado a través de una llamada.
                                    Elige el método de pago de tu preferencia!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Información privada</h4>
                                <p>
                                    Los pedidos que realices sólo los conocerás tú a travez de tu panel de usuario.
                                    Nadie más tiene acceso a esta información.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <h2 class="title">Poductos disponibles</h2>

                <div class="team">
                    <div class="row">
                        @foreach ($products as $product) <!--Se listaran todos los productos contenidos en la variable $products que se envia de TestController-->
                        <div class="col-md-3">
                            <div class="team-player">
                                <!-- ../assets/img/avatar.jpg -->
                                <img src="{{ $product->images()->first()->image }}" alt="Image not found" class="img-raised img-circle">
                                <h4 class="title">{{ $product->name }} <br />
                                    <small class="text-muted">{{ $product->category->name }}</small>
                                </h4>

                                <!--Descripción del producto-->
                                <p class="description">{{ $product->description }}</p>

                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="section landing-section">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Aclara tus dudas 🧐</h2>
                        <h4 class="text-center description">
                            Es aquí donde nos puedes expresar tus dudas, aclaraciones acerca de nuestro servicio :)
                        </h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Correo electronico</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Mensaje:</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-raised">
                                        Envia tu mensaje 
                                        📬
                                    </button>
                                </div>
                            </div>
                        </form>
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