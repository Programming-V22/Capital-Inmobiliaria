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
    <div class="card-header">Editar Usuarios</div>
    <div class="card-body">

        <form action="{{ url('usuarios')}}" method="post">
            {!! csrf_field() !!}
            <!--@method("PATCH")-->
            <label> Nombre Usuario </label></br>
            <input type="text" name="name" id="name"  class="form-control" value="{{$usuario->name}}">
            <label>Correo </label></br>
            <input type="Email" name="email" id="email" class="form-control" value=" {{$usuario->email}}" >
            <label>Telefono</label></br>
            <input type="Numeric" name="telefono" id="telefono" class="form-control" value=" {{$usuario->telefono}}" >
            <label>Rol</label></br>
            <input type="Numeric" name="rol" id="rol" class="form-control" value=" {{$usuario->rol}}" >
            <label>Contraseña</label></br>
            <input type="password" name="password" id="1" class="form-control"  placeholder=" @php if (($usuario->password)!=null) {echo "Inserte una contraseña";} @endphp">
            <label>Repita la Contraseña</label></br>
            <input type="password" name="password" id="2" onkeydown="" class="form-control" placeholder=" @php if (($usuario->password)!=null) {echo "Repita la contraseña";} @endphp" >

        </br>
            <label>Fecha</label>&nbsp&nbsp&nbsp&nbsp
            <input type="date" name="fecha_creacion" id="fecha_creacion"  class="form-control" style="width : 150px"></br>
            <input type="submit" value="Guardar" class="btn btn-success"></br>
        </form>

    </div>
</div>
<script>
campo2 = document.getElementById('2');
    campo2.addEventListener('keydown', function(e) {
    //$("#2").on('keydown', function(e) {
    let first = document.getElementById('1').value;
    let second = document.getElementById('2').value;
    let correcto;
    var keycode = e.keyCode || e.which;
        if (keycode == 13) {
            if (first == second) {
            document.getElementById('menu_body').style.background = 'lightgreen';
            document.getElementById('correcto').style.display = "block";
            document.getElementById('incorrecto').style.display = "none";
            } else {
            document.getElementById('menu_body').style.background = 'red';
            document.getElementById('correcto').style.display = "none";
            document.getElementById('incorrecto').style.display = "block ";
            }
            document.getElementById('2').value = '';
        }
    });
</script>
@stop
