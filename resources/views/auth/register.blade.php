@extends('layouts.app')

@section('page-title','Registro de usuario')

@section('body-class','signup-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1520004434532-668416a08753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} <!--token csrf tiene que estar presente en todas las peticiones POST-->
                    
                        <div class="header header-secondary text-center" style="background:black;">
                            <h4>Registro</h4>
                        </div>

                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Nombre..." required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" placeholder="Correo electronico..." name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required />
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
                            </div>
                         
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</button>
                        </div>
                        <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
</div>
@endsection


<!--

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>
-->