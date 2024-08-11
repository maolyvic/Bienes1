@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <a class= "btn btn-warning"  href="{{ route('usuarios.create')}}">Nuevo</a>

    <table class="table table-striped mt-2">
        <thead style="background-color: #353747;">
            <th style="display: none;">ID</th>
            <th style="color: #fff">Nombre</th>
            <th style="color: #fff">Email</th>
            <th style="color: #fff">Rol</th>
            <th style="color: #fff">Acciones</th>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td style="display: none;">{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        @if (!@empty($usuario->getRoleNames()))
                            @foreach ($usuario->getRoleNames() as $rolName)
                                <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                            @endforeach
                            
                        @endif
                    </td>
                    <td>
                        <a class='btn btn-info' href="{{route('usuarios.edit', $usuario->id )}}">Editar</a>
                        {!! Form::open(['method'=> 'DELETE', "route"=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                            {!! Form::submit('Borrar', ['class'=> 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination justify-content-end">
        {!! $usuarios->links() !!}
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop