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
    <div class="card-header">Agregar un nuevo cliente</div>
    <div class="card-body">

        <form action="{{ url('clientes')}}" method="post">
            {!! csrf_field() !!}
            <?php date_default_timezone_set('America/Mexico_City');
            $fecha=date("Y-m-d");
            ?>
            <label>Nombre</label></br>
            <input type="text" name="nombre" id="nombre" class="form-control"></br>
            <label>Email</label></br>
            <input type="email" name="email" id="email" class="form-control"></br>
            <label>Telefono</label></br>
            <input type="text" name="telefono" id="telefono" class="form-control"></br>
            <label>Tipo Cliente</label></br>
            <input type="number" name="tipo_cliente" id="tipo_cliente" class="form-control" value="1">
            </br>
            <label>Fecha</label>&nbsp&nbsp&nbsp&nbsp
            <input type="date" name="fecha_creacion" id="fecha_creacion"  class="form-control"></br>
            <input type="submit" value="Guardar" class="btn btn-success"></br>
        </form>

    </div>
</div>
</body>
</html>
@stop
