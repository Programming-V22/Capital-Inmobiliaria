
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
    <div class="card-header">Agregar un nuevo Inmueble</div>
    <div class="card-body">

        <form action="{{ url('inmuebles')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <?php date_default_timezone_set('America/Mexico_City');
            $fecha=date("Y-m-d");
            ?>
            <div class="row g-3">
                        <label> Titulo</label></br>
                    <input type="text" name="titulo" id="titulo" style="width : 400px";  class="form-control" >

                    <label>Dirección</label></br>
                    <input type="text" name="direccion" id="direccion" class="form-control">

                    <label>Descripción</label></br>
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Escribe un descripcion corta sobre el inmueble" name="descripcion" id="descripcion" style="height: 100px"></textarea>


                    </div>
                    <div class="col-sm-4">
                        <label>Tipo de Casas</label>
                        <select class="form-select" aria-label="Default select example"  name="id_tipo"  id="id_tipo">
                            <@foreach($tipo as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-sm-4">
                    <label>Precio</label></br>
                    <input type="number" name="precio" id="precio" class="form-control" value="">
                    </div>

                    <div class="col-sm-4">
                    <label>Cantidad cuartos</label></br>
                        <input type="number" name="cuartos" id="cuartos" class="form-control">
                    </div>

                    <div class="col-sm-4">
                    <label>Cantidad Autos</label></br>
                    <input type="number" name="autos" id="autos" class="form-control">
                    </div>

                    <div class="col-sm-4">
                    <label>Cantidad Inodoros</label></br>
                        <input type="number" name="inodoros" id="inodoros" class="form-control">
                    </div>

                    <div class="col-sm-4">
                       <label>Fecha</label>&nbsp&nbsp&nbsp&nbsp
                        <input type="date" name="fecha" id="fecha"  class="form-control" ></br>
                    </div>

                    <div class="col-sm-8">
                        <label>Imagen de Portada</label>
                       <input type="file" name="portada" id="portada" class="form-control" accept="image/*"  ></br>
                    </div>

                    <div class="col-sm-5">
                     <input type="submit" value="Guardar" class="btn btn-success"></br>
                    </div>

            </div>
        </form>
        <div id="current_date"></p>
    </div>
</div>

@stop
