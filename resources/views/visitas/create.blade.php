
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
<meta name="X-UA-Compatible" content="IE=edge">
<div class="card" style="margin:20px;">
    <div class="card-header">Agregar una nueva visita</div>
    <div class="card-body">
        <form action="{{ url('visitas')}}" method="post">
            {!! csrf_field() !!}
            <?php date_default_timezone_set('America/Mexico_City');
            $fecha=date("Y-m-d");
            ?>
            <label>Nombre Inmueble</label></br>
            <select class="form-select" aria-label="Default select example" name="id_inmueble" id="id_inmueble">
                @foreach($inmueble as $inmuebl)
                <option value="{{$inmuebl->id}}">&nbsp&nbsp{{$inmuebl->titulo}}</option>
                @endforeach
            </select></br>
            
            <label>Nombre Cliente</label></br>
            <select class="form-select" aria-label="Default select example"  name="id_cliente"  id="id_cliente" onchange="cliente();">
                <@foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">&nbsp&nbsp{{$cliente->nombre}}</option>

                @endforeach
            </select>
            </br> 
            <label>Fecha de Visita</label>&nbsp&nbsp&nbsp&nbsp
            <input type="date" name="fecha_visita" id="fecha_visita"  class="form-control"></br>
            <input type="submit" value="Guardar" class="btn btn-success"></br>
        </form>
        
    </div>
</div>
<script type="">   

window.listaClientes = @json($clientes);

$.each(listaClientes,function(index, value))

/*

function selecte (){
    var cliente = document.getElementById("nombre").value;
    //alert (cliente);
    var telefono = document.getElementById("telefono");
}
*/

</script>
@stop