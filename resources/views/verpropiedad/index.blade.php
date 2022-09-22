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
  <link rel="stylesheet" href="{{ asset('/css/fontello.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <link rel="stylesheet" href="{{ asset('css/verpropiedad.css') }}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://kit.fontawesome.com/8364aff728.js" crossorigin="anonymous"></script>
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<title>Inicio</title>

</head>
<body>
  <header>
    <div class="contenedor">
      <a href="index.html">  <!--encerre el logo en una (a) para que tambien lo lleve al index.html-->
        <img class="menu-logo" src="{{ asset('img/inmobiliaria infinity300px.png')}}" alt="imagen logo">
      </a>
      <input id="menu-bar" type="checkbox" >
      <label class="icon-menu" for="menu-bar"></label>
      <nav class="menu">
        <a href="{{ url('/') }}">&nbsp; Inicio  &nbsp;<i class="fa-solid fa-house"></i></a>
        <a href="nosotros.html">&nbsp; Nosotros &nbsp; <i class="fa-solid fa-info"></i></a>
        <a href="{{ url('/anuncios')}}">&nbsp; Anuncios  &nbsp;<i class="fa-solid fa-newspaper"></i></a>
        <a href="{{ url('/contacto') }}">&nbsp; Contacto  &nbsp;<i class="fa-solid fa-address-book"></i></a>
        <a href="{{ url('/login') }}">&nbsp; <i class="fa-solid fa-user"></i></a>
      </nav>
      <br>
    </div>
    <br>
  </header>

  <section class="contenedor seccion">
    <br><br><br>
    <br>
    <h3 class="card-text">&nbsp; {{$inmueble->tipos1->nombre}} {{$inmueble->titulo}}</h3><br>
    <img  class="img" src="/img/cargadas/{{ $inmueble->portada }}">
    <div class="nosotros">
        <p class="card-text"><strong> Dirección : </strong>{{$inmueble->direccion}} </b></p><br>
        <p class="card-text">&nbsp;<strong> {{$inmueble->tipos1->nombre}} {{$inmueble->titulo}} </strong></p><br>
        <p class="card-text"><strong> Descripción : </strong>{{$inmueble->descripcion}}</p><br>
        <p class="card-text"><strong> Precio : </strong>{{$inmueble->precio}} $</p><br>
        <p class="card-text"> Cuenta con <strong>{{$inmueble->cuartos}}</strong> Cuartos,
            cuenta con espacio para  <strong>{{$inmueble->autos}}</strong> vehiculos y
            cuenta con <strong>{{$inmueble->inodoros}} </strong>inodoros disponibles</p>
    </div>

  </section>
  <body>
    <br>
<br>
<br>

<!--hacer la vista-->
<!--footer-->

<footer id="footer">
  <div class="contenedor footer-content">
      <div class="contact-us">
          <h2 class="brand">INFINITY-INMOBILIARIA</h2>
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
<script type="text/javascript" src=""></script>
  </body>

</html>





