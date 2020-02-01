<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>HyperBus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="hb/img/hyperbus.png" rel="icon" />
    <link href="hb/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
      rel="stylesheet"
    />

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="hb/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="hb/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="hb/lib/owlcarousel/assets/owl.theme.default.min.css"
      rel="stylesheet"
    />
    <link href="hb/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="hb/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="hb/lib/modal-video/css/modal-video.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="hb/css/style.css" rel="stylesheet" />

  </head>

  <body>
    <header id="header" class="header header-hide">
      <div class="container">
        <div id="logo" class="pull-left">
          <h1>
            <a href="#body"><span>Hyper</span><span style="color: #ECC331">Bus</span></a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1><a href="#body" class="scrollto"><img src="img/2L-01.png" style="max-width: 10%" alt="" title="" /></a></h1> -->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <!-- <li class="menu-active"><a href="#hero">Home</a></li>
            <li><a href="#about-us">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#screenshots">Screenshots</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#pricing">Pricing</a></li> -->
            <li>
              <a href="{{url('/')}}">HyperMovilidad</a>
            </li>
            <li class="menu-has-children">
              <a href="">Acceso web</a>
              <ul>                
                <li><a href="http://hypertaxi.hypermovilidad.com/publico/propietario">Propietario</a></li>
                <li><a href="http://hypertaxi.hypermovilidad.com/tunel/resuelve">Gestión</a></li>
              </ul>
            </li>
            <!-- <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
      <div class="hero-container">
        <!-- <h1>Welcome to eStartups</h1>
        <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2> -->

        <div class="row">
          <div class="col-lg-4 col-md-6">
              <img
                src="/hc/img/hc2.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
          </div>
          <div class="col-lg-4 col-md-6">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hypermovilidad.hyperbuspropietario&hl=es_EC">
              <img
                src="img/4-01.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
              <img
                src="/hc/img/hc2.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
          </div>
        </div>

        <a target="_blank" href="https://play.google.com/store/apps/developer?id=HyperMovilidad&hl=es_EC" class="btn-get-started scrollto">Descargar</a>
        <div class="btns">
          <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
          <a target="_blank" href="https://play.google.com/store/apps/developer?id=HyperMovilidad&hl=es_EC"><i class="fa fa-play fa-3x"></i> Google Play</a>
          <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
        </div>
      </div>
    </section>
    <!-- #hero -->

    <!--==========================
    Get Started Section
  ============================-->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

    </section>

    <!--==========================
    About Us Section
  ============================-->
    <section id="about-us" class="about-us padd-section wow fadeInUp">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 col-lg-3">
            <img src="hb/img/about-img.png" alt="About" />
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content">
              <h2><span>HyperBus</span></h2>
              <p>
                Seguridad a toda hora
              </p>

              <ul class="list-unstyled">
                <li><i class="fa fa-angle-right"></i>Transmisión de datos cada 15 segundos</li>
                <li><i class="fa fa-angle-right"></i>Control de tiempos entre puntos de control</li>
                <li><i class="fa fa-angle-right"></i>Control de velocidad dentro de la ruta</li>
                <li><i class="fa fa-angle-right"></i>Control por abandono de ruta</li>
                <li><i class="fa fa-angle-right"></i>Cumplimiento de puntos prioritarios (Inicio en la mañana y final en la noche)</li>
                <li><i class="fa fa-angle-right"></i>Control del relé de precalentamiento de motor</li>
                <li><i class="fa fa-angle-right"></i>Módulo de registro para conductores y controladores</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Features Section
  ============================-->

    <section id="features" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Funcionalidades</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="hb/img/svg/1.png" alt="img" class="img-fluid" />
              <h4>Transmisión de datos cada 15 segundos</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="hb/img/svg/2.png" alt="img" class="img-fluid" />
              <h4>Control de tiempos entre puntos de control</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="hb/img/svg/3.png" alt="img" class="img-fluid" />
              <h4>Control de velocidad dentro de la ruta</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="hb/img/svg/4.png" alt="img" class="img-fluid" />
              <h4>Control por abandono de ruta</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img src="hb/img/svg/5.png" alt="img" class="img-fluid" />
              <h4>Cumplimiento de puntos prioritarios (Inicio en la mañana y final en la noche)</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img
                src="hb/img/svg/6.png"
                alt="img"
                class="img-fluid"
              />
              <h4>Control del relé de precalentamiento de motor</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img src="hb/img/svg/7.png" alt="img" class="img-fluid" />
              <h4>Módulo de registro para conductores y controladores</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/code.svg" alt="img" class="img-fluid" />
              <h4>clean codes</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <!--==========================
    Screenshots Section
  ============================-->
    <section id="screenshots" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Galería HyperBus</h2>
        </div>
      </div>

      <div class="container">
        <div class="owl-carousel owl-theme">
          {{-- <div><img src="img/screen/1.jpg" alt="img" /></div>
          <div><img src="img/screen/2.jpg" alt="img" /></div>
          <div><img src="img/screen/3.jpg" alt="img" /></div>
          <div><img src="img/screen/4.jpg" alt="img" /></div>
          <div><img src="img/screen/5.jpg" alt="img" /></div>
          <div><img src="img/screen/6.jpg" alt="img" /></div> --}}
          <div><img src="hb/img/screen/7.png" alt="img" /></div>
          <div><img src="hb/img/screen/8.png" alt="img" /></div>
          <div><img src="hb/img/screen/9.png" alt="img" /></div>
          <div><img src="hb/img/screen/10.png" alt="img" /></div>
          <div><img src="hb/img/screen/11.png" alt="img" /></div>
        </div>
      </div>
    </section>

    <div class="container">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/xCYjEO3YLrw"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/xCYjEO3YLrw/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal1"
          /></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal6"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/kO7E3OAwzIc"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/kO7E3OAwzIc/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal6"
          /></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal4"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/FtYnDRYUQvg"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/FtYnDRYUQvg/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal4"
          /></a>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>

    <!--==========================
    Team Section
  ============================-->
    <section id="team" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Nuestro Equipo de Trabajo</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="hb/img/team/1.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="hb/img/team/2.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="hb/img/team/3.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="hb/img/team/4.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Newsletter Section
  ============================-->
    <section id="newsletter" class="newsletter text-center wow fadeInUp">
      <div class="overlay padd-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="form-inline" method="POST" action="#">
                <input
                  type="email"
                  class="form-control "
                  placeholder="Email Adress"
                  name="email"
                />
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-location-arrow"></i>Suscríbete
                </button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!--==========================
    Contact Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Contáctanos</h2>
          {{-- <p class="separator"> --}}
          <p class="">
            ¿Interesado en nuestros servicios o simplemente tienes una duda? No dudes en escribirnos.
          </p>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Av. Ricardo Sánchez 812 y Sánchez y Cifuentes. Esquina<br />Ibarra, Ecuador</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>info@hypermovilidad.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+593 98 465 5141</p>
                <p><span>Atención al cliente</span> <br>(06) 2950 570 <br> +593 98 923 4317</p>
                <p><span>Soporte técnico</span> <br> +593 99 859 0817</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://twitter.com/vecitaxi" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/vecitaxi" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/vecitaxi/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>              
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Nombre"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Correo electrónico"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Asunto"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Mensaje"
                  ></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                  <button type="submit">Enviar Mensaje</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact -->

    <!--==========================
    Footer
  ============================-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4">
            <div class="footer-logo">
                <h1>
                    <a href="#body"><span style="color:#fff">Hyper</span><span style="color: #ECC331">Bus</span></a>
                </h1>
              {{-- <a class="navbar-brand" href="#">HyperBus</a> --}}
              <p>
                Seguridad a toda hora
              </p>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>About us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>About us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>Support</h4>

              <ul class="list-unstyled">
                <li><a href="#">faq</a></li>
                <li><a href="#">Editor help</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>About us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyrights">
        <div class="container">
          <p>&copy; 2020 Hypermovilidad Cia. Ltda. Todos los derechos reservados.
            </p>          
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="hb/lib/jquery/jquery.min.js"></script>
    <script src="hb/lib/jquery/jquery-migrate.min.js"></script>
    <script src="hb/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="hb/lib/superfish/hoverIntent.js"></script>
    <script src="hb/lib/superfish/superfish.min.js"></script>
    <script src="hb/lib/easing/easing.min.js"></script>
    <script src="hb/lib/modal-video/js/modal-video.js"></script>
    <script src="hb/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="hb/lib/wow/wow.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="hb/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="hb/js/main.js"></script>
  </body>
</html>
