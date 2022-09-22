
@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Usuarios</title>
</head>
<body>
<div class="table-responsive-sm">
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista de Usuarios</h2>
                    </div>
        <div class="card-body">
        <a href="{{ route('usuarios.create')}}" class="btn btn-success btn-sm" title="Agregar nuevo Cliente"><i class="fa-solid fa-circle-plus"></i>
            Nuevo
        </a>
        </div>
    <table class="table table-hover" >
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
        @foreach ($usuarios as $usuario)
            <tr>
                <td scope="row">{{$usuario->name}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->rol}}</td>
                <td>{{$usuario->fecha_creacion}}</td>
                <td>
                    <!--
                    <a href="{{ url('/usuarios', $usuario->id) }}" title="Ver Usuarios"><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></i></button></a>
                    <a href="{{ route('usuarios.edit', $usuario)}}" title="Editar Usuarios"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    -->
                    <form method="POST" action="{{ url('usuarios/'. $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Usuarios" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</body>

@endsection
