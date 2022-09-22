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
                <title>Nosotros</title>
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

            <main class="contenedor">
                <h1 class="fw-300 centrar-texto">Conoce Sobre Nosotros</h1>
                <div class="contenido-nosotros">
                  <div class="img">
                    <img src="img/blog3.jpg" alt="Imagen Sobre Nosotros">
                </div>
                    <div class="texto-nosotros">
                        <b>
                          Con mucha Experiencia en el mercado
                        </b><br><br>


                      <p>Estimado cliente.- <br><br> Me es grato saludarlos cordialmente y darles a conocer Nuestros Servicios en el
                        <br><br>Área Inmobiliaria & Consultoría Jurídica INFINITY para la comercialización de venta sobre un bien inmueble, anticresis y arrendamiento.
                        <br><br>Como parte de nuestro exitoso sistema nuestras oficinas, incorpora nuestra reputación basada en la
                        <br><br>honestidad, transparencia, confianza y trato personal a un esquema de alta eficiencia en el manejo de
                        <br><br> COMPRA VENTA - ANTICRESIS - ARRENDAMIENTO sobre BIENES INMUEBLES dentro y fuera del AREA URBANA
                        <br><br> Y/O AREA RUAL, como también PERITOS y ESPECIALIZADOS en el Área JURIDICA, para mayor garantía y evitar ,
                        <br><br> En estas condiciones Nuestros Servicios superan ampliamente la atención habitualmente ofrecida, al
                        <br><br> asesorarlo en cada etapa de las operaciones como se detalla a continuación.
                      </p>
                    </div>
                </div>
            </main>
            <section class="contenedor seccion">
                <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>

                <div class="icono-nosotros">
                  <div class="icono">
                    <img src="{{ asset('img/icono1.svg') }}" alt="Icono Seguridad" />
                    <h3>Seguridad</h3>
                    <p>
                      Brindamos la seguridad que buscan nuestros clientes al vender y comprar. <br>La inmobiliaria mas segura del mercado a la hora de comprar tu nuevo hogar.<br> Ofrecemos la garantia de que nuestros inmuebles son los mejores del mercado.
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
          </body>
  </html>


