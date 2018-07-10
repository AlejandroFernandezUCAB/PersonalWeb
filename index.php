<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pedro Fernández</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">    
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
          <div class="container">
            <a class="navbar-brand" href="#">
              <strong>Pedro Fernández</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
             <!--   <li class="nav-item">
                  <a class="nav-link" href="#">Li</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
        
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!--Modal: Contact form-->
            <div class="modal-dialog cascading-modal" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header primary-color white-text">
                        <h4 class="title">
                            <i class="fa fa-pencil"></i> Contacto</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                            <form method="post" id="formdata" action="php/form.php">
                              <!-- Nombre -->
                              <div class="md-form form-sm">
                                  <i class="fa fa-envelope prefix"></i>
                                  <input name="nombre" type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" required>
                                  <label for="materialFormNameModalEx1">Nombre</label>
                              </div>

                              <!-- Email -->
                              <div class="md-form form-sm">
                                  <i class="fa fa-lock prefix"></i>
                                  <input name="correo" type="email" id="materialFormEmailModalEx1" class="form-control form-control-sm" required>
                                  <label for="materialFormEmailModalEx1">Correo</label>
                              </div>

                              <!-- Asunto -->
                              <div class="md-form form-sm">
                                  <i class="fa fa-tag prefix"></i>
                                  <input name="asunto" type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm" required>
                                  <label for="materialFormSubjectModalEx1">Asunto</label>
                              </div>

                              <!-- Textarea -->
                              <div class="md-form form-sm">
                                  <i class="fa fa-pencil prefix" aria-hidden="true"></i>
                                  <textarea name="mensaje" type="text" id="materialFormMessageModalEx1" class="md-textarea form-control" minlength="10" required></textarea>
                                  <label for="materialFormMessageModalEx1">Mensaje</label>
                              </div>

                              <div class="text-center mt-4 mb-2">
                                  <button type="submit" class="btn btn-primary">Enviar
                                      <i class="fa fa-send ml-2"></i>
                                  </button>
                              </div>
                            </form>
                    </div>
                </div>
                <!--/.Content-->
            </div>
            <!--/Modal: Contact form-->
        </div>
                      
        <!-- Full Page Intro -->
        <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('img/background.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-12 white-text text-center">
                  <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Pedro
                    <a class="font-weight-bold" style="color:#90caf9;">Fernández</a>
                  </h1>
                  <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Desarrollador web, móvil y backend</h5>
                  <div class="wow fadeInDown" data-wow-delay="0.3s">
                    <a class="btn btn-light-blue btn-lg" data-toggle="modal" data-target="#modalContactForm" >Contacto</a>
                    <!--<a class="btn btn-indigo btn-lg">Sobre mí</a>-->
                  </div>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!--Fin de header-->

    <!--Contenido-->
    <main>
      <div class="container">
        <!--Grid row-->
        <div class="row py-5">
          <!--Grid column-->
          <div class="col-xl-12 col-md-12 mb-12">
            <h1>Información personal</h1>
                <img src="img/personal.jpg" class="img-fluid z-depth-1 float-left" alt="Responsive image">
                <p style="margin-left: 10%">Mi nombre es Pedro Alejandro Fernández tengo 22 años y soy estudiante de Ingeniería en Informática en la Universidad Católica 
                    Andrés Bello (UCAB) ubicada en Caracas, Venezuela.
                </p>
          </div>
            <div class="col-md-12 text-justify">
            <h2>Experiencia</h2>
            <ul>
              <li>
                <strong>Desarrollador móvil y web</strong>
                <br>Alquimica Quimerica C.A <br> Junio 2017 - presente
              </li>
              <li>
                <strong>Desarrollador web</strong>
                <br>
                www.equiposymaquinasindustriales.com.ve 
                <br>Febrero - Mayo 2017
              </li>
            </ul>
            <h2>Educación</h2>
            <ul>
              <li>
                <strong>Universidad Católica Andrés Bello</strong>
                <br>
                Ingeniería en Informática
                <br>
                2013 -  Actualidad
              </li>
              <li>
                <strong>Liceo Militarizado Generalísimo Francisco de Miranda</strong>
                <br>
                Bachillerato
                <br>
                2008 -  2013
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
    </main>
    <!--Fin de contenido -->

    <!--Footer-->
    <!--Fin de footer-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
