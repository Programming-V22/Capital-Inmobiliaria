@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>


<div class="card border-warning mb-3" >
  <div class="card-body">
  <h5 class="card-title">Nuevo inmueble</h5>
    <form class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="text" class="form-control" placeholder="Disabled input" id="current_date" disabled>
        </div>
        <div class="col-md-4 ">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" placeholder="Dolares $">
        </div>
        <div class="col-md-4">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control" placeholder="Zona / Barrio / Calle">
        </div>
        <div class="col-md-8">
            <label class="form-label">Titulo</label>
            <input type="text"  class="form-control " placeholder="Ej.Casa pequeña 2 pisos">
        </div>
        <div class="col-md-2">
            <label class="form-label">Inodoros</label>
            <input type="number" class="form-control" placeholder="0" min="0">
        </div>
        <div class="col-md-2">
            <label class="form-label">Autos</label>
            <input type="number" class="form-control " placeholder="0" min="0">
        </div>
        <div class="col-md-8">
            <label for="formFileMultiple" class="form-label">Imagenes</label>
            <input class="form-control bg-info bg-gradient text-white  " type="file" id="formFileMultiple" multiple >
        </div>
        <div class="col-md-4">
            <label class="form-label">Disabled select menu</label>
            <select class="form-select">
                <option>Casa</option>
                <option>Departamento</option>
                <option>Anticretico</option>
                <option>Alquiler</option>
                <option>Lote</option>
            </select>
        </div>
        <section class="">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-1.webp"
                        class="w-100"
                    />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-2.webp"
                        class="w-100"
                    />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.webp"
                        class="w-100"
                    />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>
                </div>
            </section>
            <!-- Section: Images -->

            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div
                class="modal fade"
                id="exampleModal1"
                tabindex="-1"
                aria-labelledby="exampleModal1Label"
                aria-hidden="true"
                >
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="ratio ratio-16x9">
                        <iframe
                        src="https://www.youtube.com/embed/A3PDXmYoF5U"
                        title="YouTube video"
                        allowfullscreen
                        ></iframe>
                    </div>

                    <div class="text-center py-3">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                        </button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Modal 2 -->
                <div
                class="modal fade"
                id="exampleModal2"
                tabindex="-1"
                aria-labelledby="exampleModal2Label"
                aria-hidden="true"
                >
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="ratio ratio-16x9">
                        <iframe
                        src="https://www.youtube.com/embed/wTcNtgA6gHs"
                        title="YouTube video"
                        allowfullscreen
                        ></iframe>
                    </div>

                    <div class="text-center py-3">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                        </button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Modal 3 -->
                <div
                class="modal fade"
                id="exampleModal3"
                tabindex="-1"
                aria-labelledby="exampleModal3Label"
                aria-hidden="true"
                >
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="ratio ratio-16x9">
                        <iframe
                        src="https://www.youtube.com/embed/vlDzYIIOYmM"
                        title="YouTube video"
                        allowfullscreen
                        ></iframe>
                    </div>

                    <div class="text-center py-3">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- Section: Modals -->
            </section>
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class=" mb-3">
        
        </div>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    
    </form>
    </div>
</div>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = month + "/" + day + "/" + year;
</script>
</body>
</html>
@stop