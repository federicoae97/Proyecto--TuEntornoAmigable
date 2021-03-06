<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tu ambiente amigable - T.E.A</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="views/style/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="views/style/css/animate.css">

        <link rel="stylesheet" href="views/style/css/owl.carousel.min.css">
        <link rel="stylesheet" href="views/style/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="views/style/css/magnific-popup.css">

        <link rel="stylesheet" href="views/style/css/aos.css">

        <link rel="stylesheet" href="views/style/css/ionicons.min.css">

        <link rel="stylesheet" href="views/style/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="views/style/css/jquery.timepicker.css">


        <link rel="stylesheet" href="views/style/css/flaticon.css">
        <link rel="stylesheet" href="views/style/css/icomoon.css">
        <link rel="stylesheet" href="views/style/css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php"><span>T.E.A</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="index.php?c=info&a=index" class="nav-link">Informaci??n de proyecto</a></li>
                        <li class="nav-item"><a href="index.php?c=objetivos&a=index" class="nav-link">Objetivos</a></li>
                        <li class="nav-item active"><a href="index.php?c=integrantes&a=index" class="nav-link">Integrantes de proyecto</a></li>
                        <li class="nav-item"><a href="index.php?c=resultados&a=index" class="nav-link">Resultados</a></li>
                        <li class="nav-item"><a href="index.php?c=dashboard&a=index" class="nav-link">DashBoard</a></li>
                        <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Iniciar sesi??n</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="home-slider owl-carousel">
            <div class="slider-item bread-item" style="background-image: url('views/style/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container" data-scrollax-parent="true">
                    <div class="row slider-text align-items-end">
                        <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.php">Inicio</a></span> <span>Integrantes de proyecto</span></p>
                            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">INGENIEROS DEL PROYECTO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">               
                <div class="row">
                    <div class="col-lg-12 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(views/style/images/fran.jpg);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html">Edward Alexander Francia Guzman</a></h3>
                                <span class="position">Ingeniero de Sistemas e Ingeniero electr??nico y de telecomunicaciones</span>
                                <div class="text">
                                    <p>Con amplios conocimientos de Ingenier??a de Software, Big data, redes, dise??o web y Programaci??n de Computadores para aplicaciones empresariales con conocimientos en lenguajes de programaci??n. Integro, auto gestionado, con alta capacidad de trabajo en equipo, adaptabilidad, comunicaci??n asertiva, autoaprendizaje y liderazgo. Con intereses en pr??cticas de calidad de software, desarrollo, redes y anal??tica de datos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-12 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(views/style/images/fede.jpg);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html">Federico Almanzar Espitia</a></h3>
                                <span class="position">Ingeniero electr??nico y de telecomunicaciones e Ingeniero de Sistemas</span>
                                <div class="text">
                                    <p>Con conocmientos en infraestructura de red, administraci??n de servidores, programaci??n web, apasionado por el deporte. Honesto, integro, con buena capacidad de adaptaci??n y resoluci??n de problemas, autodidacta. Con intereses en la seguridad informatica, desarrollo, infrestructura, IoT y TI.</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </section> 

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <!-- Modal -->
        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRequestLabel">INICIO DE SESI??N</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                <input type="password" class="form-control" id="password" placeholder="Contrase??a">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Iniciar Sesi??n" class="btn btn-primary">               
                                <a href="contact.html" class="btn btn-primary"><span>Registrarse</span></a></li>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="views/style/js/jquery.min.js"></script>
        <script src="views/style/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="views/style/js/popper.min.js"></script>
        <script src="views/style/js/bootstrap.min.js"></script>
        <script src="views/style/js/jquery.easing.1.3.js"></script>
        <script src="views/style/js/jquery.waypoints.min.js"></script>
        <script src="views/style/js/jquery.stellar.min.js"></script>
        <script src="views/style/js/owl.carousel.min.js"></script>
        <script src="views/style/js/jquery.magnific-popup.min.js"></script>
        <script src="views/style/js/aos.js"></script>
        <script src="views/style/js/jquery.animateNumber.min.js"></script>
        <script src="views/style/js/bootstrap-datepicker.js"></script>
        <script src="views/style/js/jquery.timepicker.min.js"></script>
        <script src="views/style/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="views/style/js/google-map.js"></script>
        <script src="views/style/js/main.js"></script>

    </body>
</html>