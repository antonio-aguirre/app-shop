@extends('layouts.app')

@section('page-title','Inicio de sesión')

@section('body-class','signup-page') <!--Se define esta sección solo para el conteido del cuerpo de la página-->
                                     <!--Se aplica la clase 'signup-page' solo a esta parte -->

@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1502160348486-995f41fa55b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }} <!--token csrf tiene que estar presente en todas las peticiones POST-->
                        
                            <div class="header header-secondary text-center" style="background:black;">
                                <h4>Inicio de sesión</h4>
                            </div>

                            <div class="content">

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input placeholder="Password..." id="password" type="password" class="form-control" name="password" required />
                                </div>

                                <!--If you want to add a checkbox to this form, uncomment this code-->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <!--EL helper OLD ayuda a recuperar un valor anterior escrito en un input-->
                                        Recordar sesión
                                    </label>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-simple btn-primary btn-lg">Iniciar sesión</button>
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
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }} 

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </form>

-->


    