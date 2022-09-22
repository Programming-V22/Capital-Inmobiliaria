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
<title>Editar</title>
<div class="card" style="margin:20px;">
    <div class="card-header">Agregar un nuevo Inmueble</div>
    <div class="card-body">

        <form action="{{ url('inmuebles')}}" method="post">
            {!! csrf_field() !!}
            <!--@method("PATCH")-->
            
            <label> Titulo</label></br>
            <input type="text" name="titulo" id="titulo"  class="form-control" value="{{$inmueble->titulo}}">
            <label>Dirección</label></br>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{$inmueble->direccion}}" >
            <label>Descripción</label></br>
            
            <textarea class="form-control" name="descripcion" id="descripcion" style="height: 100px" >{{$inmueble->descripcion}}</textarea>
            
           
            <label>Tipo de Casas</label>
            <select class="form-select" aria-label="Default select example"  name="id_tipo"  id="id_tipo" style="width : 500px">
                <@foreach($tipo as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                @endforeach
            </select>

            <label>Precio</label></br>
            <div class="input-group" style="width : 200px">
            <input type="numeric" class="form-control" name="precio"  id="precio" value="{{$inmueble->precio}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">$</span>
            </div>

            <label>Cantidad cuartos</label></br>
            <div class="input-group" style="width : 200px">
                <input type="numeric" class="form-control" name="cuartos"  id="cuartos" value="{{$inmueble->cuartos}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"> &nbsp&nbsp</span>
            </div>

            <label>Cantidad Autos</label></br>            
            <div class="input-group" style="width : 200px">
                <input type="nuemric" class="form-control" name="autos"  id="autos" value="{{$inmueble->autos}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"> &nbsp&nbsp</span>
            </div>
            
            <label>Cantidad Inodoros</label></br>
            <div class="input-group" style="width : 200px">
                <input type="numeric" class="form-control" name="inodoros"  id="inodoros" value="{{$inmueble->inodoros}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"> &nbsp&nbsp</span>
            </div>
            
            <label>Fecha</label>&nbsp&nbsp&nbsp&nbsp
            <input type="date" name="fecha" id="fecha"  value="{{$inmueble->fecha}}" class="form-control" style="width : 150px"></br>
            <input type="submit" value="Guardar" class="btn btn-success"></br>
        </form>
        <div id="current_date"></p>
    </div>
</div>

@stop
