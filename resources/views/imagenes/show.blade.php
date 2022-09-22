@extends('adminlte::page')
@php

    use Intervention\Image\ImageManager;
@endphp

@section('content')
</br>
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

<!-- Modal gallery -->
<section class="gallery">
    <!-- Section: Images -->
    <section class="">
      <div class="row justify-content-right">
        <div class="col-sm-2 ">
                @php
                    $pru=$_GET['id'];
                @endphp

                <a href="{{ route('imagenes.createid',$pru)}}" title="Agregar nuevo Imagen">
                   <img
                    src="{{ asset('img/add.png') }}"
                    class="img-thumbnail"
                    data-toggle="lightbox"
                    onpointerenter="this.setAttribute('style', 'color: white; background: yellow')"
                    onpointerleave="this.setAttribute('style', 'color: yellow; background: white')"
                    />
                </a>

                <a href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>

        </div>
        @foreach ( $imagenes as $imagen )
        @php
            $intervention = new ImageManager();
            $image = $intervention->make('img/cargadas/'.$imagen->nombre_img);
            $image->resize(300, 245);
            $image->save('img/modificadas/'.$imagen->nombre_img);
        @endphp
            <div class="col-sm-2">
                    <img
                    src="../img/modificadas/{{$imagen->nombre_img}}"
                    class="img-thumbnail"
                    data-toggle="lightbox"          />
                    <a href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
            </div>
        @endforeach

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
    </section>
    <!-- Section: Modals -->
  </section>
  <!-- Modal gallery -->
</body>

@endsection
