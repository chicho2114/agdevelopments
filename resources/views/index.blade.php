<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#2196F3">
    <title>AG Developments - Desarrollo de sistemas web, paginas web, soporte web, diseño y edición en photoshop, sony vegas, asistencia remota, traducción y escritura de artículos.</title>
    <meta name="description" content="Desarrollo de sistemas web, paginas web, soporte web, diseño y edición en photoshop, sony vegas, asistencia remota, traducción y escritura de artículos.">
    <meta name="keywords" content="paginas web, sistemas web, html, php, programación, desarrollo, diseño, laravel, artículos, traducción, agdevelopments">
    <meta name="author" content="Argenis García">

    <link rel="icon" href="{{asset('img/icono.png')}}" sizes="32x32">

    <!-- CSS  -->
    <link href="{{asset('min/plugin-min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('min/custom-min.css')}}" type="text/css" rel="stylesheet" >

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-101341105-1', 'auto');
      ga('send', 'pageview');

    </script>

    <style type="text/css">
        #cargando {
            position: absolute;
            width:100%;
            height:100%;
            background:#FFFFFF  no-repeat center;
            z-index: 10000;
        }
        .center-block {
            width:300px;
            padding:10px;
            margin-left: auto;
            margin-right: auto;
            align-content: center;
        }
    </style>

</head>
<body id="top" class="scrollspy">
<!-- Loader -->
<div id="cargando" class="center-block">
    <div class="progress blue-grey darken-3">
      <div class="indeterminate blue"></div>
    </div>
   
    <div class="center-align">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
          <br>
          <p>Cargando</p>
    </div>
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="grey darken-4" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#top" id="logo-container" class="brand-logo"><img style="margin-top: 15px;" src="{!!asset('img/logo.png')!!}" height="45"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#acerca_de">Acerca de</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#disponibilidad">Disponibilidad</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav grey darken-4">
                    <li><a class=" white-text" href="#acerca_de">Acerca de</a></li>
                    <li><a class=" white-text" href="#servicios">Servicios</a></li>
                    <li><a class=" white-text" href="#disponibilidad">Disponibilidad</a></li>
                    <li><a class=" white-text" href="#contacto">Contacto</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>Servicios de</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Desarrollo Web</b>
                <b>Photoshop</b>
                <b>edición de video</b>
                <b>transcripción</b>
                <b>traducción</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div class="section">
    <div class="container">
        <h2 class="header text_b blue-grey-text text-darken-2">Acerca de </h2>
        <div id="acerca_de" class="row scrollspy">
            <div  class="col s12">
                <h4 class="center header text_h2"> <em><span class="blue-grey-text text-darken-2"> <strong>AG Developments</strong></span> </em> nace como marca personal de <span class="blue-grey-text text-darken-2"><strong>Argenis García</strong></span>. Es <span class="blue-grey-text text-darken-2"> <strong> Licenciado en Computación</strong></span> con más de <span class="blue-grey-text text-darken-2"><strong>2 años</strong></span> de <span class="blue-grey-text text-darken-2"><strong>experiencia</strong></span> en el mundo laboral. Este proyecto tiene como <span class="blue-grey-text text-darken-2"><strong>objetivo</strong></span> mostrar los diversos <span class="blue-grey-text text-darken-2"><strong>servicios</strong></span> que se pueden ofrecer a distintas personas, pequeñas o medianas empresas según sea el caso, <span class="blue-grey-text text-darken-2"><strong>independientemente</strong></span> del lugar donde se encuentre. </h4>
            </div>
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-laptop-windows" style="color: #607d8b;"></i>
                    <h5 class="promo-caption">Diseño y Desarrollo Web</h5>
                    <p class="light center">Con más de 2 años de experiencia en el área del desarrollo web, tanto en el diseño de páginas web, así como también en el desarrollo de aplicaciones web con fines empresariales, comerciales o personales.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group" style="color: #607d8b;"></i>
                    <h5 class="promo-caption">Enfoque en la Experiencia del Usuario</h5>
                    <p class="light center">Con amplios conocimientos en características de Interacción Humano - Computador (IHC), ofreciendo así el mejor diseño, adaptabilidad y experiencia del usuario final en diversos desarrollos.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-verified-user" style="color: #607d8b;"></i>
                    <h5 class="promo-caption">Atención y Soporte Garantizado</h5>
                    <p class="light center">Ofreciendo la mejor atención y soporte de manera efectiva y rápida con el fin de garantizar una grata experiencia tanto para el cliente como para el usuario final. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div id="sectionServicios" class="section">
    <div class="container">
        <h2 class="header text_b blue-grey-text text-darken-2">Servicios </h2>
        <div id="servicios" class="row scrollspy">
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/desarrollo_web.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Creación de Sitios Web <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a target="_blank" href="https://www.fiverr.com/agarcia1493/crear-paginas-web-adaptables">Ir al Servicio</a></p>
                    </div>
                    <div class="card-reveal card-action">
                        <span class="card-title grey-text text-darken-4">Creación de Sitios Web <i class="mdi-navigation-close right"></i></span>
                        <p>Servicio de creación de sitios web. A través de este servicio se pueden realizar desde paginas web ya sean personales o empresariales hasta sistemas web complejos con funcionalidades personalizadas. Todo esto con la mejor tecnología y técnicas de programación siempre siguiendo las especificaciones del cliente.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/publicidad.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Creación de Anuncios <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a target="_blank" href="https://www.fiverr.com/agarcia1493/crear-un-banner-para-tu-sitio-web">Ir al Servicio</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Creación de Anuncios <i class="mdi-navigation-close right"></i></span>
                        <p>A través de este servicio podrá obtener el anuncio, banner o header que usted desee. Con gran experiencia comprobable en diseños de banners y anuncios para distintos clientes y distintas plataformas como YouTube, Facebook, Paginas Web, entre otros.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/photoshop.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Edición con Photoshop <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a target="_blank" href="https://www.fiverr.com/agarcia1493/editar-tu-imagen-con-photoshop">Ir al Servicio</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Edición con Photoshop <i class="mdi-navigation-close right"></i></span>
                        <p>El servicio ideal para editar las imágenes o fotos que el cliente desee, usando el programa ideal para satisfacer las necesidades que requiera el cliente. Con experiencia y portafolio comprobable, el cliente obtendrá el resultado esperado.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/visitas_web.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Generación de Visitas <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a target="_blank" href="https://www.fiverr.com/agarcia1493/generar-visitas-para-su-sitio-web-26c7d1b2-fa7e-47ea-95f5-6513581839ee">Ir al Servicio</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Generación de Visitas <i class="mdi-navigation-close right"></i></span>
                        <p>El servicio ideal para generar trafico para su sitio web. El servicio preferido para aumentar audiencia, promociones entre otras cualidades similares con resultados comprobables desde Google Analytics.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/articulos.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Creación de Articulos <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a target="_blank" href="https://www.fiverr.com/agarcia1493/escribir-1-articulo-con-minimo-300-palabras">Ir al Servicio</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Creación de Articulos <i class="mdi-navigation-close right"></i></span>
                        <p>Obtenga los artículos de tópico que necesite de manera profesional y segura. Con experiencia comprobable y resultados garantizados. Investigación y elaboración de manera profesional cumpliendo las especificaciones del cliente.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/servicios/servicio_personalizado.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">¿Servicio Personalizado? <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#contacto">Ir a Contacto</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">¿Servicio Personalizado? <i class="mdi-navigation-close right"></i></span>
                        <p>Si desea obtener otro tipo de servicio o posee alguna duda o inquietud de los mismos, puede comunicarse a través del sistema y en la brevedad posible sera contactado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="{{asset('img/fondo.png')}}"></div>
</div>

<!--Team-->
<div class="section">
    <div class="container">
        <h2 class="header text_b blue-grey-text text-darken-2">Disponibilidad </h2>
        <div id="disponibilidad" class="row scrollspy">
            <div  class="col s12">
                <h4 class="center header text_h2"> También disponible en: </h4>
            </div>

            <div class="col s12 m3">
                <a href="https://www.upwork.com/o/profiles/users/_~01afc2957931091494/" target="_blank">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/logos/upwork.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><strong> Upwork </strong><br/></span>
                    </div>
                </div>
                </a>
            </div>
            <div class="col s12 m3">
                <a href="https://www.workana.com/freelancer/cf91c74a63be581448a64e1e78f14c2e" target="_blank">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/logos/workana.png')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><strong> Workana </strong><br/></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m3">
                <a href="https://www.fiverr.com/agarcia1493" target="_blank">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/logos/fiverr.png')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><strong> Fiverr </strong><br/></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m3">
                <a href="https://www.freelancer.es/u/agarcia21.html" target="_blank">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/logos/freelancer.png')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><strong> Freelancer </strong><br/></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer class="page-footer grey darken-4">
    <div class="container">  
        <div id="contacto" class="row scrollspy">
            <div class="col l6 s12">
                <div id="respuestaContacto">
                    
                </div>
                <form class="col s12" action="{!! route('contacto') !!}" method="post" id="ContactForm">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="nombre" type="text" class="validate white-text" required>
                            <label for="icon_prefix" class="white-text">Nombre y Apellido</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="correo" type="email" class="validate white-text" required>
                            <label for="icon_email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="mensaje" class="materialize-textarea white-text" required minlength="20"></textarea>
                            <label for="icon_prefix2" class="white-text">Mensaje</label>
                        </div>
                        <div class="col offset-s1 s12">
                           {!! Recaptcha::render() !!}
                        </div>

                        <div class="col offset-s1 s10">
                            <br>

                            <button id="buttonContacto" class="btn waves-effect waves-light blue" type="submit">Enviar
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                            
                            <div id="spinnerContacto" class="progress blue-grey darken-3" style="display: none;">
                                  <div class="indeterminate blue"></div>
                              </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12 offset-l3">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.instagram.com/argenis1493/" target="_blank">
                            <i class="small fa fa-instagram white-text"></i> Instagram
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/argenis.garciagonzalez" target="_blank">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://twitter.com/chicho2114" target="_blank">
                            <i class="small fa fa-twitter-square white-text"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://bitbucket.org/chicho2114/" target="_blank">
                            <i class="small fa fa-bitbucket-square white-text"></i> BitBucket
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/chicho2114" target="_blank">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/argenis-garcia" target="_blank">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright blue-grey darken-4">
        <div class="container">
            Desarrollado por <a class="white-text" href="https://github.com/chicho2114">Lic. Argenis García</a>. 2017 Todos los derechos reservados &copy;
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="{{asset('min/plugin-min.js')}}"></script>
    <script src="{{asset('min/custom-min.js')}}"></script>
    <script src="{{asset('js/funciones.js')}}"></script>

    </body>
</html>
