@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('crear-rol')
        <a class='btn btn-warning' href="{{route('roles.create')}}">Nuevo</a>
    @endcan
    <table class="table table-striped mt-2">
        <thead style="background-color:#353747">
            <th style="color:#fff;">Rol</th>
            <th style="color:#fff;">Acciones</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        @can('editar-rol')
                            <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Editar</a>
                        @endcan

                        @can('borrar-rol')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style'=>'display:inline'])!!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop