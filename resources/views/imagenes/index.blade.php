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
    
        <div class="table-responsive-sm">
        <div class="container">
                <div class="row" style="margin:20px;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Lista de Imagenes</h2>
                            </div>
                

                <div class="card-body">
                <a href="{{ route('imagenes.create')}}" class="btn btn-success btn-sm" title="Agregar nuevo Cliente"><i class="fa-solid fa-circle-plus"></i>
                    Nuevo
                </a>
                </div> 
            <table class="table table-hover" >
                <thead class="table-dark">
                    <tr>

                    <th scope="col">Imagen</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col">Nombre Inmueble</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                
                <tbody class="table-group-divider">
                @foreach ($imagen as $image)
                    <tr>
                    
                        <td scope="row"><img src="img/cargadas/{{$image->nombre_img}}" width="100px" height="70px"></td>
                        <td>{{$image->prioridad}}</td>
                        <td>{{$image->inmuebles->titulo}}</td>
                        
                        <td>
                            <a href="{{ url('/imagenes', $image->id) }}" title="Ver Imagenes"><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></i></button></a> 
                            <!--se quito el boton de editar-->
                            <!--<a href="{{ route('imagenes.edit', $image)}}" title="Editar Clientes"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>-->
                            <form method="POST" action="{{ url('imagenes/'. $image->id) }}" accept-charset="UTF-8" style="display:inline">
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
