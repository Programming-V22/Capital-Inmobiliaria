@php

    use Intervention\Image\ImageManager;
@endphp


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1.0, maximum-scale=1, minimum-scale=1">
 <meta name="autor" content="Nombre autor">
 <meta name="owner" content="Empresa de Diseño">
 <meta name="description" content=" sobre la emprezar " content="global">
 <meta name="Keywords" lang="es" content="bienes raices,Costa Rica">
 <meta name="Keywords" lang="en" content="producto Costa Rica">
 <meta property="og:title" content="web busines">
 <meta property="og:description" content="sobre la emprezar ">
 <meta properti="og:type" content="website">
 <meta name="languaje" content="spanish">
 <meta name="distribution" content="global">
 <meta name="robots" content="index,follow">
 <link rel="stylesheet" href="{{ asset('css/stylebarradenavegacaovertical.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Anuncios</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <a href="{{ url('/')  }}">   <!--encerre el logo en una (a) para que tambien lo lleve al index.html-->
            <img class="menu-logo" src="{{ asset('img/inmobiliaria infinity300px.png')}}" alt="imagen logo">
          </a>
          <input id="menu-bar" type="checkbox" >
          <label class="icon-menu" for="menu-bar"></label>
          <nav class="menu">
            <a href="{{ url('/') }}">&nbsp; Inicio  &nbsp;<i class="fa-solid fa-house"></i></a>
            <a href="{{ url('/nosotros') }}">&nbsp; Nosotros &nbsp; <i class="fa-solid fa-info"></i></a>
            <a href="{{ url('/anuncios')}}">&nbsp; Anuncios  &nbsp;<i class="fa-solid fa-newspaper"></i></a>
            <a href="{{ url('/contacto') }}">&nbsp; Contacto  &nbsp;<i class="fa-solid fa-address-book"></i></a>
            <a href="{{ url('/login') }}">&nbsp; <i class="fa-solid fa-user"></i></a>
          </nav>
        </div>
      </header>
  <main class="seccion contenedor">
    <div class="anuncios">
      <div class="texto">
        <h2 class="fw-300 centrar-texto">Casas y Departamentos en Venta</h2>
      </div>
    </div>


    <div class="contenedor-anuncios">
        @foreach ($inmuebles as $inmueble )
            @php
                $intervention = new ImageManager();
                $image = $intervention->make('img/cargadas/'.$inmueble->portada);
                $image->resize(800, 600);
                $image->save('img/anuncios/'.$inmueble->portada);
            @endphp
            <div class="anuncio">
                <img src="img/anuncios/{{ $inmueble->portada }}" alt="Anuncio casa con alberca" />
                <div class="contenido-anuncio">
                <h3>{{ $inmueble->titulo }}</h3>
                <p>{{ $inmueble->descripcion }}</p>
                <p class="precio">${{ $inmueble->precio }}</p>

                <ul class="iconos-caracteristicas">
                    <li>
                    <img src="img/icono_wc.svg" alt="icnoco wc">
                    <p>{{ $inmueble->inodoros }}</p>
                </li>
                <li>
                    <img src="img/icono_estacionamiento.svg" alt="icono autos">
                    <p>{{ $inmueble->autos}}</p>
                </li>
                <li>
                    <img src="img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>{{ $inmueble->cuartos }}</p>
                </li>
                </ul>

                <a href="verpropiedad/{{$inmueble->id }}" class="boton boton-amarillo d-block">Ver Propiedad</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</main>

<footer id="footer">
  <div class="contenedor footer-content">
      <div class="contact-us">
          <h2 class="brand">infinity-inmobiliaria</h2>

          <p>Somos expertos en bienes raíces</p>
      </div>
      <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100085651001620" class="icon-facebook">
        </a>
        <a href="https://twitter.com" class="icon-twitter">
        </a>
        <a href="https://instagram.com" class="icon-instagram">
        </a>
        <a href="https://wa.me/+59177027071" class="icon-whatsapp">
        </a>
    </div>
  </div>
  <div class="line"></div>
</footer>
</body>
</html>
