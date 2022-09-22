@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<title>Clientes</title>
<html>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

<div class="table-responsive">
<div class="container">
        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista de Clientes</h2>
                    </div>
        <div class="card-body">
        <a href="{{ route('clientes.create')}}" class="btn btn-success btn-sm" title="Agregar nuevo Cliente"><i class="fa-solid fa-circle-plus"></i>
            Nuevo
        </a>
        </div>
    <table class="table" >
        <thead class="table-dark">
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Tipo Cliente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
        @foreach ($clientes as $cliente)
            <tr>
                <td scope="row">{{$cliente->nombre}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->tipo_cliente}}</td>
                <td>{{$cliente->fecha_creacion}}</td>
                <td>
                    <a href="{{ url('/clientes', $cliente->id) }}" title="Ver Clientes"><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></i></button></a>
                    <a href="{{ route('clientes.edit', $cliente)}}" title="Editar Clientes"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <form method="POST" action="{{ url('clientes/'. $cliente->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Clientes" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</body>
</div>
</head>
<body>
@endsection
