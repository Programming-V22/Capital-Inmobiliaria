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
    <title>Lista Visitas</title>
</head>
<body>
<div class="table-responsive-sm">
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista de Visitas</h2>
                    </div>
        <div class="card-body">
                <!--{{ route('visitas.create')}}-->
        <a href="{{route('visitas.create')}}" class="btn btn-success btn-sm" title="Agregar nueva Visita"><i class="fa-solid fa-circle-plus"></i>
            Nuevo
        </a>
        </div> 
    <table class="table table-hover" >
        <thead class="table-dark">
            <tr>
            <th scope="col">Nombre Inmueble</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Telefono Cliente</th>
            <th scope="col">Fecha de Visita</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        
        <tbody class="table-group-divider">
        @foreach ($lista_visita as $visita)
            <tr>
            <!--arreglar esta linea  de abajotiene errores de id-->
                <td scope="row">{{$visita->inmuebles->titulo}}</td>
                <td>{{$visita->cliente->nombre}}</td></td>
                <td>{{$visita->cliente->telefono}}</td>
                <td>{{$visita->fecha_visita}}</td>
                <td>
                <a href="{{ url('/visitas', $visita->id) }}" title="Ver Clientes"><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></i></button></a>
                    <a href="{{ route('visitas.edit', $visita)}}" title="Editar Clientes"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <form method="POST" action="{{ url('visitas/'. $visita->id) }} accept-charset="UTF-8" style="display:inline">
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

@endsection