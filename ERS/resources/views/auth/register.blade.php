@extends('layouts.registrar_estilo')

@section('title')

@section('content')
<div class="panel-body">
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="nombre" class="col-md-4 control-label">Nombre</label>

            
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
            <label for="apellido" class="col-md-4 control-label">Apellido</label>

            
                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                @if ($errors->has('apellido'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif
            
        </div>


        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

            
                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                @if ($errors->has('telefono'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Dirección de Correo</label>

            
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contraseña</label>

            
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>


        <span class="login-checkbox">

            <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />

            <label class="choice" for="Field">He leido y acepto los términos de uso de la plataforma ERS.</label>

        </span>

        <div class="form-group">
            
                <button type="submit" class="login-action btn btn-primary">
                    Registrar
                </button>
            
        </div>
    </form>
</div>
@endsection
