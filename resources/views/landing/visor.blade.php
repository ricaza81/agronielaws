<!DOCTYPE html>
<html lang="es">

<head>
    @include('/landing/partials.header')
</head>



<body id="home-version-2" class="home-version-2" data-style="default">

  <div class="page-loader">
    <div id='preloader'>
      <span>Cargando...</span>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
      <div class='spinner'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
        <div class='line'></div>
      </div>
    </div>
  </div>
  <!-- /.page-loader -->

  <div id="site">


    <!--=========================-->
    <!--=        Navbar         =-->
    <!--=========================-->
    <header id="site-header" class="header-two">
      <div class="header-main gp-header-sticky">
        <div class="container">
          <div class="header-inner clearfix">
            <div class="site-logo">
              <a href="landing" class="main-logo"><img src="{{url('css/appx/assets/img/logoagronielsenencampo.png')}}" alt="Agronielsen en Campo"></a>
              <a href="landing" class="sticky-logo"><img src="{{url('css/appx/assets/img/logoagronielsenencampo.png')}}" alt="Agronielsen en Campo"></a>
            </div>
            <!-- /.site-logo -->

            <div class="mob-menu-open toggle-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>



            <nav class="site-nav">
              <ul class="site-menu">
                <li><a href="login">Ingresar</a></li>
                <li><a href="{{asset('landing#asi-funciona')}}">Así funciona</a></li>
               <li class="menu-item-has-children" id="strange"><a href="">Producto</a>
              
                  <div class="popoverContent" id="popoverContent2">
                    <div class="featureLinks">
                      <a class="featureLinksWrapper" href="{{asset('landing#prosess')}}">
                        <span class="featureLinksIcon featureIconAllFeatures"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">En general</h3>
                          <p class="featureLinksDescription">Un recorrido general por nuestras características</p>
                        </span>
                      </a>
                      <a class="featureLinksWrapper" href="{{asset('landing#prosess1')}}">
                        <span class="featureLinksIcon featureIconGantt"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">Geoposición</h3>
                          <p class="featureLinksDescription">Ubica tu gestión en el mapa.</p>
                        </span>
                      </a>
                      <a class="featureLinksWrapper" href="{{asset('landing#swape')}}">
                        <span class="featureLinksIcon featureIconTracker"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">Beneficios</h3>
                          <p class="featureLinksDescription">Mide tu gestión en campo.</p>
                        </span>
                      </a>
                      <a class="featureLinksWrapper"  href="{{asset('landing#feature-two')}}">
                        <span class="featureLinksIcon featureIconTemplates"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">Para Empresas Agrícolas</h3>
                          <p class="featureLinksDescription">Dedíquese a analizar su negocio.</p>
                        </span>
                      </a>
                      <a class="featureLinksWrapper" href="{{asset('producto#prosessvit')}}">
                        <span class="featureLinksIcon featureIconRoles"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">Reportes automáticos</h3>
                          <p class="featureLinksDescription">Mantenga el control de sus datos.</p>
                        </span>
                      </a>
                      <a class="featureLinksWrapper" href="{{asset('producto#prosess')}}">
                        <span class="featureLinksIcon featureIconWall"></span>
                        <span class="featureLinksDetails">
                          <h3 class="featureLinksTitle">Estrategia de Mercadeo</h3>
                          <p class="featureLinksDescription">Mejore su efectividad en ventas</p>
                        </span>
                      </a>
                  
              
                  <!--  <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>-->
                
                </li>
                <li><a href="{{asset('visor')}}">Visor</a></li>
                <li><a href="{{asset('precios')}}">Precios</a></li>
              </ul>
              <a href="login" class="nav-button nbtn-two">Ingresar</a>
              <a href="register" class="nav-button nbtn-two">Registrarme</a>

            </nav>
            <!-- /.site-nav -->
          </div>
          <!-- /.header-inner -->
        </div>
        <!-- /.container -->
      </div>

              <script type="text/javascript">
                document.getElementById("strange").addEventListener("mouseover", function( event ) {
                  document.getElementById("popoverContent2").classList.add("keepPopoverOpen");
                })

                document.getElementById("popoverContent2").addEventListener("mouseout", function( event ) {
                  document.getElementById("popoverContent2").classList.remove("keepPopoverOpen");
                })
              </script>
      <!-- /.header-main -->
    </header>

 <section id="" class="responsive">
      <div class="container">
        <h2>Visor Estratégico</h2>
       <div class="section-title title-two" style="background-color: #fafbff; margin-top: 101px;margin-left: -167px;">
          
          <p style="margin-bottom:30px">Agronielsen | Gestión técnica</p>


        </div>
 <div class="section-title title-two" style="background-color: transparent; margin-top: 91px;">

  <div class="container">
    <div class="row" style="width:100%;">
      <div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 responsive-display-none" style="margin-top:30px;margin-left:0px">


      
        <iframe width="600" height="750" src="https://datastudio.google.com/embed/reporting/a2b9da07-31a4-423e-ab45-bc1d00f29a1d/page/mM3VB" frameborder="0" allowfullscreen="true" style="margin-top:-60px;margin-left:-80px;margin-right:0px;margin-bottom:50px" allowfullscreen></iframe>
  
</div>




 <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" style="margin-top:-62px;margin-left:0px;text-align:left;">
     

          <div class="page-description" style="background:#ED3237">
                                <div class="icon" style="background:#ED3237">
                                  <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Mejores Posibilidades"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')}}"></use></svg>
                                </div>
                                <span style="color:#ffffff">Preguntas frecuentes</span>
                      </div>
        <div class="ui-block" style="border:0px solid #e6ecf5;">
              
           <div id="accordion" role="tablist" aria-multiselectable="true" class="accordion-faqs" style="padding:0px">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h3 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Características principales:
                    <span class="icons-wrap">
                      <svg class="olymp-plus-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-plus-icon')}}"></use></svg>
                      <svg class="olymp-accordion-close-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-accordion-close-icon')}}"></use></svg>
                    </span>
                  </a>
                </h3>
              </div>
        
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <p style="color:#000000">
               Nuestro visor estratégico permite a los fabricantes de agroinsumos:
               <li>1. Permite ver la cobertura geográfica del proceso de asistencia técnica,</li>
               <li>2. Permiten realizar filtros para una mayor segmentación de la información,</li>
               <li>3. Procesamos gran cantidad de información, y respuestas para toma de decisiones.</li>
              </p>
        
              <p style="color:#000000">
                El demo permite identificar de forma dinámica la estructura de información y de las fuentes de datos que se obtienen al momento de comprar un informe completo, estas últimas son en formato de Excel y PDF.
              </p>
            </div>
          </div>

             <div class="card-header" role="tab" id="headingOne-1">
              <h3 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                Principales KPI / Indicadores Claves
                  <span class="icons-wrap">
                           <svg class="olymp-plus-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-plus-icon')}}"></use></svg>
                      <svg class="olymp-accordion-close-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-accordion-close-icon')}}"></use></svg>
                          </span>
                </a>
              </h3>
            </div>
        
            <div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
              <p style="color:#000000">
               Gracias a la analítica de datos, la empresa obtiene los siguientes indicadores claves en tiempo real:
              <li>1. Ubicación por geoposición (cobertura de asistencia)</li>
              <li>2. Valorización economica del proceso de asistencia técnica</li>
              <li>3. % cumplimiento de ventas por asesor técnico</li>
              <li>4. % de efectividad en ventas (facturación real / valorización en campo)</li>
              <li>5. Pareto de cultivos, agricultores y productos</li>
              </p>
            </div>

             <div class="card-header" role="tab" id="headingOne-1">
              <h3 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                Utilice su portátil de pantalla completa
                  <span class="icons-wrap">
                           <svg class="olymp-plus-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-plus-icon')}}"></use></svg>
                      <svg class="olymp-accordion-close-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-accordion-close-icon')}}"></use></svg>
                          </span>
                </a>
              </h3>
            </div>
        
            <div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
              <p style="color:#000000">
               La analítica de datos procesa gran volumen de información, por eso recomendamos visitar todos nuestros reportes directamente desde computador portatil o de escritorio.
              </p>
            </div>



            

        </div>
      </div>
  <div class="container">
     <div class="row">
        <a href="https://datastudio.google.com/s/g-CTCI60p_g" width="1800" height="650" scrolling="yes" title="Google Data Studio embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true" style="margin-top:0px;margin-left:0px;margin-right:0px;margin-bottom:50px" class="newboton" data-wow-delay="0.0s" style="margin-top: 40px" target="_blank">Pantalla Completa
        </a>
    </div>
  </div>

    </div>
  </div>
</div>
</div>
</div>
</section>

 

 

  
  <style>
  .dark{
      border:0px;
      background:#fff;
  }
  
  iframe {
    border-width: 0px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    margin-top: -95px;
        margin-left: 30px;
}

.content {
    min-height: 250px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: -36px;
}


#toolbar .toolbar-logo {
    display: inline-block;
    padding: 2px;
    width: 100%;
    height: 0;
    float: left;
    overflow: hidden;
     margin-top: -920px;
}



.dark{
    background: #fff;
    color: rgb(255, 255, 255);
    top: 0px;
    width: 1000px;
}
  
  #positionContainer {border:4px solid #fff;}
  </style>


          <!-- /.col-lg-4 col-md-6 -->


      <!-- /.container -->
      <style>
              #swape {
          padding-top: 60px;
          padding-bottom: 0px;
          background: #f9fbff;
                    }
            #testimonial-two {
    background: #fff;
    padding: 40px 0 80px;
        margin-bottom: 161px;
}



        .testimonial-content-two {
    -webkit-box-shadow: 0px 20px 50px 0px rgba(1, 0, 57, 0.1);
    box-shadow: 0px 20px 50px 0px rgba(1, 0, 57, 0.1);
    max-width: 810px;
    margin: 45px auto;
    /* margin-bottom: 27px; */
    /* padding: 30px 50px 40px; */
    border-radius: 10px;
}

.testimonial-content-two {
    -webkit-box-shadow: 0px 20px 50px 0px rgba(1, 0, 57, 0.1);
    box-shadow: 0px 20px 50px 0px rgba(1, 0, 57, 0.1);
    max-width: 810px;
    margin: 45px auto;
    padding: 0px 50px 40px;
    /* border-radius: 10px; */
}


#testimonial-two {
  @media (max-width: 768px);
    padding: 10px 0 30px;
    margin-bottom: 0;
}

        #countup {
  
   /* padding: 162px 0 70px;*/
       background: #f9fbff;
    padding: 206px 0 70px; }

#countup {
  @media (max-width: 768px)
    padding: 24px 0 20px;
}

    </style>


        </div>

</section>
    <!-- /#swape -->

  

       <!--=============================-->
    <!--=        Feature Two        =-->
    <!--=============================-->
  



   <!--========================-->
    <!--=        Footer        =-->
    <!--========================-->
    <footer id="site-footer-two" class="site-footer" style="background:#edf2f6">
      <div class="container">
        <div class="footer-inner-two wow fadeInUp">
          <div class="row">
            <div class="col-lg-4 col-md-7">
              <div class="widget widget-about">
                <div class="footer-logo">
                  <a href="{{asset('landing')}}"><img src="{{url('css/appx/assets/img/sticky-logo.png')}}" alt="Agronielsen en Campo"></a>
                </div>

                <p class="content">
                  Ofrecemos soluciones empresariales que se integran a la estrategia de transformación digital, para una mayor productividad
                  del sector agrícola en latinoamérica.
                </p>


              </div>
              <!-- /.widget widget-about -->
            </div>
            <!-- /.col-lg-2 -->

            <div class="col-lg-2 col-md-5">
              <div class="widget widget-menu">
                <h3 class="widget-title">Soporte</h3>

                <ul class="footer-menu">
                  <li><a href="https://play.google.com/store/apps/details?id=io.ionic.agronielsen" target="_blank">Google Play</a></li>
                  <!--<li><a href="https://www.agronielsen.com/politica-privacidad/" target="_blank">Privacidad</a></li>-->
                 <!-- <li><a href="https://www.agronielsen.com/modelamiento-de-datos/" target="_blank">Modelo de datos</a></li>-->
                  <li><a href="register">Registrarme</a></li>
                  <li><a href="login">Cuenta</a></li>
                  <li><a href="password">Olvidé mi contraseña</a></li>
                </ul>
              </div>
              <!-- /.widget widget-menu -->

            </div>
            <!-- /.col-lg-2 -->

            <div class="col-lg-3 col-md-7">
              <div class="widget widget-menu">
                <h3 class="widget-title">Compañía</h3>

                <ul class="footer-menu">
                  <li><a href="https://www.agronielsen.com/" target="_blank">Agronielsen</a></li>
                  <li><a href="{{asset('visor')}}" target="_blank">Analítica de datos</a></li>
                  <li><a href="{{asset('ventainformes')}}" target="_blank">Venta de Informes</a></li>
                 <!-- <li><a href="https://www.agronielsen.com/membresia-inteligencia-de-mercados-agricolas-colombia/?restricted=page" target="_blank">Membresía Inteligencia de Mercados</a></li>-->
                 <!-- <li><a href="https://www.agronielsen.com/blog/abre-tu-cuenta-gratis/" target="_blank">Demo de tablero de Análisis</a></li>-->
                 <!-- <li><a href="https://www.agronielsen.com/mineria" target="_blank">Míneria de Clientes</a></li>-->
                 <li><a href="https://directodefinca.com" target="_blank">Directo de Finca</a></li>
                  <li><a href="https://www.agronielsen.com/blog/contacto/" target="_blank">Contacto</a></li>
                  <li><a href="register" target="_blank">Suscribirse</a></li>
                </ul>
              </div>
              <!-- /.widget widget-menu -->

            </div>
            <!-- /.col-lg-2 -->

            <div class="col-lg-3 col-md-5">
              <div class="widget widget-menu">
                <h3 class="widget-title">Contacto</h3>

                <ul class="footer-contact-info">
                  <!--<li><span>Oficina:</span> Calle 32A #2B-63, CALI</li>-->
                  <li><span>Contáctanos:</span><a href="tel:+573004339418"> +573004339418</a></li>
                  <li><span></span> info@agronielsen.com</li>
                </ul>

                <div class="follow-us">
                  <span>{{trans('messages.follower')}}</span>

                  <ul class="footer-social-two">
                    <li><a href="https://www.facebook.com/agronielsen" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/agronielsen" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCIQKosZoStSaNm92NsZZHGQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                   <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->
                  </ul>
                </div>
                <!-- /.follow-us -->
              </div>
              <!-- /.widget widget-menu -->

            </div>
            <!-- /.col-lg-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.footer-inner -->

        <div class="site-info">
          <div class="row">
            <div class="col-lg-6">
              <p class="copyright wow fadeInUp" data-wow-delay="0.3s">Todos los derechos reservados © 2020 Desarrollado por <a href="https://www.mktmedia.co" target="_blank">MKT Media | Transformación Digital 4.0</a></p>
            </div>
            <!-- /.col-lg-6 -->

         <!--   <div class="col-lg-6">
              <ul class="footer-menu-bottom wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>-->
              <!-- /.footer-menu -->
           <!-- </div>-->
            <!-- /.col-lg-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.site-info -->
      </div>
      <!-- /.container -->

     <div class="footer-animate-bubble">

    </footer>
    <!-- /#site-footer -->


  </div>
  <!-- /#site -->


   <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2O6NRzoS7rpQ4ftOgrrzOdPLHUcb1RJk" async defer></script>-->

  <!-- Dependency Scripts -->
 @include('landing/partials.footer')

 <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=c5c1215c-ecf8-44af-b71c-210ea7a83f5a"> </script>
<!-- End of  Zendesk Widget script -->

  <style>
    .home-version-2 {
    font-family: "Montserrat", sans-serif;
    color: #333;
    font-size: 15px;
    line-height: 26px;
    overflow-x: hidden;
}

.banner-content .title {
    font-size: 30px;
    line-height: 40px;
    margin-top: 54px;
}

.punch-viewer-container {
    background: transparent;
    overflow: hidden;
    margin-bottom: -115px;
}

.banner-content .title {
    font-size: 30px;
    line-height: 40px;
    margin-top: 21px;
    padding-top: 45px;
}

#banner-two .banner-content {
    /* top: 50%; */
    -webkit-transform: translateY(-40%);
    -ms-transform: translateY(-40%);
    transform: translateY(-40%);
    position: absolute;
    left: 0;
    width: 100%;
    padding: 0 10px;
    margin-top: 169px;
    z-index: 1111;
}

        .banner-content {
                         margin-top: 0px;
                         }

          #banner-two {
                        height: 100vh;
                        background-image: -o-linear-gradient(50deg, #698F31 0%, #698F31 100%);
                        background-image: linear-gradient(40deg, #76A82B 0%, #76A82B 100%);
                        overflow: hidden;
                        padding-top: 100px;  }
      /*  .site-nav .site-menu li {
                            display: block;
                            margin-right: 0;
                            text-align: left;
                        }*/

        .site-nav {
                float: none;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

.keepPopoverOpen {
    z-index: 10 !important;
    opacity: 1 !important;
    visibility: visible !important;
    display: flex !important;
    -webkit-transform: translate(0,-20px) !important;
    -moz-transform: translate(0,-20px) !important;
    -ms-transform: translate(0,-20px) !important;
    -o-transform: translate(0,-20px) !important;
    transform: translate(0,-20px) !important;
    -webkit-transition: all .5s cubic-bezier(.75,-.02,.2,.97) !important;
    -moz-transition: all .5s cubic-bezier(.75,-.02,.2,.97) !important;
    -ms-transition: all .5s cubic-bezier(.75,-.02,.2,.97) !important;
    -o-transition: all .5s cubic-bezier(.75,-.02,.2,.97) !important;
    transition: all .5s cubic-bezier(.75,-.02,.2,.97) !important;
}
.popoverContent {
    -webkit-transition: all .25s ease-out;
    -moz-transition: all .25s ease-out;
    -ms-transition: all .25s ease-out;
    -o-transition: all .25s ease-out;
    transition: all .25s ease-out;
    background: #fff;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    box-shadow: 0 1px 3px 0 rgba(51,51,79,0.1), 0 0 10px 0 rgba(51,51,79,0.06);
    padding: 40px;
    box-sizing: border-box;
    text-align: left;
    opacity: 0;
    z-index: 100;
    transition-delay: .1s;
    display: none;
    visibility: hidden;
    position: fixed;
    right: 310px;
    margin-top: 35px;
    -webkit-transform: translate(0,10px);
    -moz-transform: translate(0,10px);
    -ms-transform: translate(0,10px);
    -o-transform: translate(0,10px);
    transform: translate(0,10px);
    width: auto;
    max-width: 600px;
}

.popoverWrapper {
    position: relative;
}

.featureLinks {
    display: flex;
    flex-flow: row wrap;
}

.featureLinksWrapper: {
    padding: 0 30px 0 0;
}

.featureLinksIcon.featureIconAllFeatures {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525735128/allFeatures_slgwdm.png);
    background-size: cover;
}

.featureLinksIcon {
    min-width: 55px;
    height: 55px;
}

.featureLinksDetails {
    padding: 0 0 0 15px;
}

.featureLinksWrapper {
    padding: 0 30px 0 0;
    -webkit-transition: all .25s ease-out;
    -moz-transition: all .25s ease-out;
    -ms-transition: all .25s ease-out;
    -o-transition: all .25s ease-out;
    transition: all .25s ease-out;
    display: flex;
    flex-basis: 50%;
    box-sizing: border-box;
    padding: 0 0 0 30px;
    align-items: center;
    margin: 0 0 40px;
}

.featureLinksDetails .featureLinksDescription {
    color: #78909c;
    -webkit-transition: all .25s ease-out;
    -moz-transition: all .25s ease-out;
    -ms-transition: all .25s ease-out;
    -o-transition: all .25s ease-out;
    transition: all .25s ease-out;
    text-transform: none;
}

.featureLinksDetails .featureLinksTitle {
    display: block;
    color: #455a64;
    margin: 0 0 5px;
    font-size: 15px;
    font-weight: 900;
    -webkit-transition: all .25s ease-out;
    -moz-transition: all .25s ease-out;
    -ms-transition: all .25s ease-out;
    -o-transition: all .25s ease-out;
    transition: all .25s ease-out;
    text-transform: none;
}

.featureLinksIcon.featureIconTracker {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/timetracker.png);
    background-size: cover;
}

.featureLinksIcon.featureIconRoles {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/roles.png);
    background-size: cover;
}

.featureLinksIcon.featureIconGantt {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940789/featuresIcons/bigger/gantt.png);
    background-size: cover;
}

.featureLinksIcon.featureIconTemplates {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/templates.png);
    background-size: cover;
}

.featureLinksIcon.featureIconWall {
    background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525720013/featuresIcons/bigger/wall.png);
    background-size: cover;
}

.header-main{
  background: #4ca937;
}

  .landing-page .content-bg-wrap:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(118,168,43,.95);
    opacity: 1;
    z-index: auto;
}

.birthday-item.badges .skills-item-meter-active {
    background: linear-gradient(to right,#ff9432,#79a42e);
}

.btn-md-2 {
    padding: .8rem 2.1rem;
    font-size: 0.98rem;
}

.accordion-faqs .card-header {
    padding: 13px 0;
    border: none;
    border-top: 1px solid #e6ecf5;
}

.btn-primary {
    color: #fff;
    background-color: #4167b2;
    border-color: #4167b2;
}

.header--standard.header--standard-full-width, .header--standard.header--standard-landing {
    width: 100%;
    left: auto;
    top: 0;
    background-color: #4167b2;
}

.header-spacer--standard {
    height: 150px;
}

.page-description {
    border: 0px solid #e6ecf5;
    background-color: #fff;
    margin-bottom: 25px;
    border-radius: 5px;
    overflow: hidden;
}

.page-description .icon {
    padding: 15px 18px;
    fill: #fff;
    background-color: #4167b2;
    border-right: 1px solid #e6ecf5;
    display: inline-block;
    vertical-align: middle;
    margin-right: 25px;
}

.logo .logo-title {
    text-transform: none;
    margin: 0;
    color: inherit;
    transition: all .3s ease;
    font-weight: 600;
}

body {
    margin: 0;
    font-family: Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;
    font-size: 1.2812rem;
    font-weight: 350;
    line-height: 1.1;
    color: #000;
    background-color: #edf2f6;
}

.birthday-item.badges .birthday-date {
    font-size: 15px;
}

.form-control {
    display: block;
    width: 100%;
    padding: 1.1rem;
    font-size: .812rem;
    line-height: 1.5;
    color: #fff;
    background-color: #fff;
    border: 1px solid #e6ecf5;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

label.control-label {
    color: #000;
}

.btn-secondary {
    color: #fff;
    background-color: #76A82B;
    border-color: #76A82B;
}

.main-header {
   padding: 110px 0 0px;
    max-width: calc(100%);
    margin: 0 auto 30px;
    position: relative;
    background-position: 50% 50%;
}

.header {
    height: 90px;
    background-color: #4167b2;
    padding-right: 0px;
    position: relative;
    top: 147px;
    left: 0;
    right: 0;
    z-index: 3;
}

.birthday-item.badges .skills-item {
    min-width: 184px;
    display: block;
    float: right;
    margin-bottom: 0;
    margin-top: 4px;
    margin-right:-50px;
}

.landing-content>:first-child {
    font-weight: 300;
    padding-top: 100px;
}

.header--standard-landing.headroom--not-top .logo, .header--standard-landing.headroom--not-top .logo .logo-title {
    color: #fff;
}

input, p, select {
     font-family: Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;
    font-size: 1.012rem;
    font-weight: 350;
    line-height: 1.3;
    color: #888da8;
}

.accordion-faqs .collapse {
    margin-bottom: 0px;
}

.card-header a {
    color: #515365;
    display: block;
    font-size: 1.32rem;
    font-weight: 600;
}

.post__author {
    margin-bottom: 20px;
    font-size: 15px;
}

.landing-content>:first-child {
    font-weight: 300;
    padding-top: 76px;
    line-height: 29px;
}

.landing-content {
    color: #fff;
    margin-bottom: 30px;
    margin-top: -68px;
}

.page-description .icon {
    padding: 15px 18px;
    fill: #fff;
    background-color: #76A82B;
    border-right: 1px solid #e6ecf5;
    display: inline-block;
    vertical-align: middle;
    margin-right: 25px;
}

.bg-account {
    background-image: url(http://www.directodefinca.com/public/css/olympus/app/img/top-header7.png);
}

.main-header {
   padding: 110px 0 0px;
    max-width: calc(100%);
    margin: 0 auto 30px;
    position: relative;
    background-position: 50% 50%;
}


@media (max-width: 1200px)
.birthday-item {
     padding: 0px; 
}

@media (max-width: 1400px)
.birthday-item {
    padding: 0px 0px;
}

.skills-item .skills-item-meter {
    padding: 0;
    width: 71%;
    border-radius: 10px;
    background-color: #fff;
    position: relative;
    height: 6px;
}

.birthday-item.badges .skills-item {
    min-width: 140px;
    display: block;
    float: right;
    margin-bottom: 0;
    margin-top: 4px;
    margin-right: -3px;
}

.landing-page .content-bg-wrap:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #4167b2;
    opacity: 0.95;
    z-index: auto;
}

.skills-item .skills-item-meter {
    padding: 0;
    width: 212%;
    border-radius: 7px;
    background-color: transparent;
    position: relative;
    height: 12px;
        margin-top: 12px;
}

#accordion {
    margin-top: 0px;
}

.card-header > h5:before, .collapsed:before {
    display: block;
    position: absolute;
    font-size: 0px;
    top: 50%;
    right: 0;
    z-index: 9;
    font-family: 'ElegantIcons';
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 0px;
}

.newboton {
font-family: "Poppins", Poppins, Sans-serif;
    font-size: 18px;
    font-weight: 600;
    background-color: #22d976;
    box-shadow: 0px 4px 15px 0px rgba(74,210,96,0.47);
    padding: 24px 40px 24px 40px;
    color:#fff;
   width: auto;
   /*margin-top:50px;
   margin-left:150px;*/
}

.newboton:hover {

    color:#fff;

}


  </style>

</body>

</html>



