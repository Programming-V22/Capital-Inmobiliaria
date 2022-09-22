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
        <title>Editar Imagenes</title>
        <div class="card" style="margin:20px;">
            <div class="card-header">Editar  </div>
            <div class="card-body">

                <form action="{{ url('imagenes')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <?php date_default_timezone_set('America/Mexico_City');
                    $fecha=date("Y-m-d");
                    ?>

                    <label>Nombre imagen</label></br>
                    <input type="file" name="nombre_img" id="nombre_img" class="form-control" accept="image/*"></br>
                    <img src="/img/cargadas/{{$imagens->nombre_img}}" width="100px" height="100px"><br><br>
                    
                    <label>Prioridad imagen</label></br>
                    <input type="text" name="prioridad" id="prioridad" class="form-control" value="{{$imagens->prioridad}}"></br>
                    
                    <label>Inmueble</label></br>
                    <input type="text" name="id_inmueble" id="id_inmueble" class="form-control" value="{{$imagens->inmuebles->titulo}}">
                    </br>
                    <input type="submit" value="Guardar" class="btn btn-success"></br>
                    
                </form>

            </div>
        </div>
@stop
