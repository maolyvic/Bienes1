@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Creación usuarios</h1>
@stop

@section('content')
    
    @if ($errors->any())
        <div class="alert alert-dark alert-dismissible fade show" role='alert'>
            <strong>Completar los campos!</strong>
            @foreach ($errors->all() as $error)
                <span class="badge badge-danger">{{$error}}</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    {!! Form::open(array('route'=>'usuarios.store', 'method'=> 'POST')) !!}
        <div class="row">
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    {!! Form::text('name', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    {!! Form::text('email', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña</label>
                    {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                </div>
            </div>
            
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="">Roles</label>
                    {!! Form::select('roles[]', $roles, [], array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 colsm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop