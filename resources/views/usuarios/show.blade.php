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
    <div class="card-header">Usuario </div>
        <div class="card-body">
            <div class="card-body">
                    <h5 class="card-title">Nombre Usuario: {{$user->name}}</h5>
                    <p class="card-text"><b>Email</b> : {{$user->email}}</p>
                    <p class="card-text"><b>Telefono</b> : {{$user->telefono}}</p>
                    <p class="card-text"><b>Contraseña</b> : {{$user->password}}</p>
                    <p class="card-text"><b>Rol</b> :
                    @php
                        if (($user->rol)==1) {
                            echo "Administrador";
                        }
                        else {
                            echo "colaborador";
                        }
                    @endphp</p>

                    <p class="card-text"><b>Fecha</b> : {{$user->fecha_creacion}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
