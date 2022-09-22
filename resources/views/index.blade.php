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
  <title>Capital Inmobiliaria</title>
  <script src="https://kit.fontawesome.com/8364aff728.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <div class="contenedor">
          <a href="{{ url('/')  }}">   <!--encerre el logo en una (a) para que tambien lo lleve al index.html-->
          <img class="menu-logo" src="{{ asset('img/logocapital.png')}}" alt="imagen logo">
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
    <section class="contenedor seccion">
      <img class="paraimagen" src="{{asset('img/fondocapital.png')}}" alt="">
      <div class="nosotros">
        <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>
      </div>


      <div class="icono-nosotros">
        <div class="icono">
          <img src="{{asset ('img/icono1.svg')}}" alt="Icono Seguridad" />

          <h3>Seguridad</h3>
          <p>
              Contamos con un personal calificado visualmente, para la respectivas visitas de su bien<br>inmueble y garantía de que haya una total transparencia de ambas partes.<br> Ofrecemos la garantia de que nuestros inmuebles son los mejores del mercado.
          </p>
        </div>
        <div class="icono">
          <img src="img/icono2.svg" alt="Icono Mejor Precio" />
          <h3>El Mejor Precio</h3>
          <p>
            Tenemos los precios mas competitivos del mercado <br> Las mejores casas,
            los mejores departamentos, los mejores lotes -LOS MEJORES PRECIOS-, <br><br>
          </p>
        </div>
        <div class="icono">
          <img src="img/icono3.svg" alt="Icono A Tiempo" />
          <h3>A Tiempo</h3>
          <p>
              Usted contara con todo nuestro esfuerzo y capacidad profesional, para obtener del cliente la mejor . <br>propuesta o negociación más factible para ambas partesy en el tiempo mas corto posible.
              <br> La PUNTUALIDAD es uno de nuestros valores.
          </p>
        </div>
      </div>
    </section>

    <main class="seccion contenedor">
      <div class="anuncios">
        <h2 class="fw-300 centrar-texto">Casas y Departamentos en Venta</h2>
      </div>

      @php
          if (count($inmuebles)!=null && count($inmuebles)>=3 ) {
              $longitud=count($inmuebles);

              $intervention = new ImageManager();
              $image = $intervention->make('img/cargadas/'.$inmuebles[$longitud-1]->portada);
              $image->resize(800, 600);
              $image->save('img/anuncios/'.$inmuebles[$longitud-1]->portada);

              $intervention1 = new ImageManager();
              $image1 = $intervention1->make('img/cargadas/'.$inmuebles[$longitud-2]->portada);
              $image1->resize(800, 600);
              $image1->save('img/anuncios/'.$inmuebles[$longitud-2]->portada);

              $intervention2 = new ImageManager();
              $image2 = $intervention2->make('img/cargadas/'.$inmuebles[$longitud-3]->portada);
              $image2->resize(800, 600);
              $image2->save('img/anuncios/'.$inmuebles[$longitud-3]->portada);
          }else {
              $longitud=0;

          }


      @endphp
      <div class="contenedor-anuncios">
        @php
            if(count($inmuebles)!=null && count($inmuebles)>=3 )
            {
        @endphp
        <div class="anuncio">
          <img src="img/anuncios/{{$inmuebles[$longitud-1]->portada }}" alt="Anuncio casa en el lago" />
          <div class="contenido-anuncio">
            <h3>{{ $inmuebles[$longitud-1]->titulo }}</h3>
            <p>{{ $inmuebles[$longitud-1]->descripcion }}</p>
            <p class="precio">${{ $inmuebles[$longitud-1]->precio }}</p>


            <ul class="iconos-caracteristicas">
              <li>
               <img src="{{ asset('img/icono_wc.svg')}}" alt="icnoco wc">
               <p>{{ $inmuebles[$longitud-1]->inodoros }}</p>
             </li>
             <li>
              <img src="{{ asset('img/icono_estacionamiento.svg')}}" alt="icono autos">
              <p>{{ $inmuebles[$longitud-1]->autos}}</p>
            </li>
            <li>
              <img src="{{ asset('img/icono_dormitorio.svg')}}" alt="icono habitaciones">
              <p>{{ $inmuebles[$longitud-1]->cuartos }}</p>
            </li>
          </ul>
          <a href="verpropiedad/{{$inmuebles[$longitud-1]->id }}" class="boton boton-amarillo d-block">Ver Propiedad</a>
        </div>
      </div>

      <div class="anuncio">
        <img src="img/anuncios/{{ $inmuebles[$longitud-2]->portada }}" alt="Anuncio casa terminados de lujo" />
        <div class="contenido-anuncio">
          <h3>{{ $inmuebles[$longitud-2]->titulo }}</h3>
          <p>{{ $inmuebles[$longitud-2]->descripcion }}</p>
          <p class="precio">${{ $inmuebles[$longitud-2]->precio }}</p>

          <ul class="iconos-caracteristicas">
            <li>
             <img src="{{ asset('img/icono_wc.svg')}}" alt="icnoco wc">
             <p>{{ $inmuebles[$longitud-2]->inodoros }}</p>
           </li>
           <li>
            <img src="{{ asset ('img/icono_estacionamiento.svg')}}" alt="icono autos">
            <p>{{ $inmuebles[$longitud-2]->autos}}</p>
          </li>
          <li>
            <img src="img/icono_dormitorio.svg" alt="icono habitaciones">
            <p>{{ $inmuebles[$longitud-2]->cuartos }}</p>
          </li>
        </ul>

        <a href="verpropiedad/{{$inmuebles[$longitud-2]->id }}" class="boton boton-amarillo d-block">Ver Propiedad</a>
      </div>
    </div>

    <div class="anuncio">
      <img src="img/anuncios/{{ $inmuebles[$longitud-3]->portada }}" alt="Anuncio casa con alberca" />
      <div class="contenido-anuncio">
        <h3>{{ $inmuebles[$longitud-3]->titulo }}</h3>
        <p>{{ $inmuebles[$longitud-3]->descripcion }}</p>
        <p class="precio">${{ $inmuebles[$longitud-3]->precio }}</p>

        <ul class="iconos-caracteristicas">
          <li>
           <img src="img/icono_wc.svg" alt="icnoco wc">
           <p>{{ $inmuebles[$longitud-3]->inodoros }}</p>
         </li>
         <li>
          <img src="img/icono_estacionamiento.svg" alt="icono autos">
          <p>{{ $inmuebles[$longitud-3]->autos}}</p>
        </li>
        <li>
          <img src="img/icono_dormitorio.svg" alt="icono habitaciones">
          <p>{{ $inmuebles[$longitud-3]->cuartos }}</p>
        </li>
      </ul>

      <a href="verpropiedad/{{$inmuebles[$longitud-3]->id }}" class="boton boton-amarillo d-block">Ver Propiedad</a>
    </div>
    @php
          }else {
              echo"<h3> No se agregaron inmuebles</h3>";
          }
        @endphp
  </div>
  </div>
  <div class="ver-todas">
    <a href="{{ route('anuncios.anuncios') }}" class="boton boton-verde">Ver Todas</a>
  </div>
  </main>
  <section class="imagen-contacto">
    <div class="contenedor contenido-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Llena el formulario de Contacto y un asesor se pondrá en contacto a la
        brevedad
      </p>
      <a href="{{ url('/contacto') }}" class="boton boton-amarillo">Contactanos</a>
    </div>
  </section>
<footer id="footer">
  <div class="contenedor footer-content">
      <div class="contact-us">
          <h2 class="brand">INMOBILIARIA-INFINITY</h2>
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





