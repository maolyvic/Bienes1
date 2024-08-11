@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Creación Roles</h1>
@stop

@section('content')
    
    @if ($errors->any())
        <div class="alert alert-dark alert-dismissible fade show" role='alert'>
            <strong>Revise los campos los campos!</strong>
            @foreach ($errors->all() as $error)
                <span class="badge badge-danger">{{$error}}</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    {!! Form::open(array('route'=>'roles.store', 'method'=> 'POST')) !!}
        <div class="row">
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Rol</label>
                    {!! Form::text('name', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 colsm-12 col-md-12">
                <div class="form-group">
                    <label for="">Permisos para este Rol:</label>
                    <br/>
                    @foreach ($permission as $value)
                        <label> {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                    <br/>
                    @endforeach
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    {!! Form::close() !!}
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop