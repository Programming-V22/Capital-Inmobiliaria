<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Contacto</title>

    <!-- Icons font CSS-->
    <link href="{{asset ('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset ('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/contactoestilo.css') }}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{ asset('css/stylebarradenavegacaovertical.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Contactanos</h2>
                    <form method="POST" action="{{ route('mail') }}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nombre" name="nombre" required >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Fecha para contactarte" name="fecha" required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="motivo" required>
                                    <option disabled="disabled" selected="selected">Elije un motivo</option>
                                    <option value="Vender inmueble">Vender inmueble</option>
                                    <option value="Comprar inmueble">Comprar inmueble</option>
                                    <option value="Informacion">Informacion</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="correo" placeholder="Correo" name="correo" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Telefono" name="telefono" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Escribe un mensaje" name="mensaje" required>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="contactado" required>
                                    <option disabled="disabled" selected="selected">Porque deseas ser contactado</option>
                                    <option value="Correo y telefono">Ambos</option>
                                    <option value="Telefono">Telefono</option>
                                    <option value="Correo">Correo</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{asset ('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{asset ('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

<!--eliminar para q quede =-->
<footer id="footer">
    <div class="contenedor footer-content">
        <div class="contact-us">
            <h2 class="brand">Infinity-inmobiliaria</h2>

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
