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
<div class="card" style="margin:20px;">
    <div class="card-header">Inmuebles </div>
        <div class="card-body">
            <div class="card-body">
                    <h5 class="card-title">Nombre Inmueble: {{$inmueble->titulo}}</h5>
                    <p class="card-text"><b>Dirección</b> : {{$inmueble->direccion}}</p>
                    <p class="card-text"><b>Descripción</b> : {{$inmueble->descripcion}}</p>
                    <p class="card-text"><b>Precio Cliente</b> : {{$inmueble->precio}}</p>
                    <p class="card-text"><b>tipo de Casa</b> : {{$inmueble->tipos1->nombre}}</p>
                    <p class="card-text"><b>Cuartos</b> : {{$inmueble->cuartos}}</p>
                    <p class="card-text"><b>autos</b> : {{$inmueble->autos}}</p>
                    <p class="card-text"><b>Inodoros </b> : {{$inmueble->inodoros}}</p>
                    <p class="card-text"><b>Fecha </b> : {{$inmueble->fecha}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
