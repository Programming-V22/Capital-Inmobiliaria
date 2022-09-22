
@php

    use Intervention\Image\ImageManager;
@endphp

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
<!-- Modal gallery -->
<section class="gallery">
    <!-- Section: Images -->
    <section class="">
      <div class="row justify-content-center">
        @foreach ( $inmuebles as $inmueble )
        @php
            $intervention = new ImageManager();
            $image = $intervention->make('img/cargadas/'.$inmueble->portada);
            $image->resize(500, 400);
            $image->save('img/modificadas/'.$inmueble->portada);
        @endphp
            <div class="col-sm-4">
                <h3>
                    <small class="text-muted">{{ $inmueble->titulo }}</small>
                </h3>
                    <a href="{{ url('/imagenes?id='.$inmueble->id.'',$inmueble->id ) }}">
                       <img
                        src="img/modificadas/{{$inmueble->portada}}"
                        class="img-thumbnail"
                        data-toggle="lightbox"
                        />
                    </a>

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
