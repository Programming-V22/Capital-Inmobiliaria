@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
    <html lang="en">
    <meta charset="utf-8">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
<div class="card" style="margin:20px;">
    <div class="card-header">Visitas </div>
        <div class="card-body">
            <div class="card-body">
                    <h5 class="card-title">Nombre de Inmueble : {{$lista_visita->inmuebles->titulo}}</h5><p></p>
                    <p class="card-text"><b>Direccion de Inmueble</b> : {{ $lista_visita->inmuebles->direccion}}</p>
                    <p class="card-text"><b>Precio de Inmueble</b> : {{ $lista_visita->inmuebles->precio}}</p>
                    <p class="card-text"><b>Nombre Cliente</b> : {{ $lista_visita->cliente->nombre}}</p>
                    <p class="card-text"><b>Telefono Cliente</b> : {{ $lista_visita->cliente->telefono}}</p>
                    <p class="card-text"><b>Email Cliente</b> : {{ $lista_visita->cliente->email}}</p>
                    <p class="card-text"><b>Fecha de Visita</b> : {{ $lista_visita->fecha_visita}}</p>
            </div>
        </hr>
    </div>
</div>
@stop