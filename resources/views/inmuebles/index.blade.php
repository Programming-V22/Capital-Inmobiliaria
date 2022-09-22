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
    </head>
    <body>
    <title>Inmuebles</title>
</head>
<body>
<div class="table-responsive-sm">
<div class="container">
        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista de Inmuebles</h2>
                    </div>
        <div class="card-body">
        <a href="{{ route('inmuebles.create')}}" class="btn btn-success btn-sm" title="Agregar nuevo Cliente"><i class="fa-solid fa-circle-plus"></i>
            Nuevo
        </a>
        </div>
    <table class="table table-hover table-bordered " >
        <thead class="table-dark">
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">tipo de Casa</th>
            <th scope="col">Cuartos</th>
            <th scope="col">autos</th>
            <th scope="col">Inodoros</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
        @foreach ($inmueble as $inmuebl)
            <tr>
                <td scope="row">{{$inmuebl->titulo}}</td>
                <td>{{$inmuebl->direccion}}</td>
                <td>{{$inmuebl->descripcion}}</td>
                <td>{{$inmuebl->precio}} $</td>
                <td>{{$inmuebl->tipos1->nombre}}</td>
                <td>{{$inmuebl->cuartos}}</td>
                <td>{{$inmuebl->autos}}</td>
                <td>{{$inmuebl->inodoros}}</td>
                <td>{{$inmuebl->fecha}}</td>
                <td>
                    <a href="{{ url('/inmuebles', $inmuebl->id) }}" title="Ver Clientes"><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></i></button></a>
                    <a href="{{ route('inmuebles.edit', $inmuebl)}}" title="Editar Clientes"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <form method="POST" action="{{ url('inmuebles/'. $inmuebl->id) }}" accept-charset="UTF-8" style="display:inline">
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
<?php

?>
@endsection
