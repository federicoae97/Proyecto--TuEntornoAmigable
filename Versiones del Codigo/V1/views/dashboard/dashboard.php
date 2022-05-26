<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DashBoard T.E.A</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="views/style/css/dash/img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="views/style/css/dash/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="views/style/css/dash/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="views/style/css/dash/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="views/style/css/dash/css/style.css" rel="stylesheet">


        <!-- Style barras -->
        <style>
            .chart-wrap {
                --chart-width:420px;
                --grid-color:#aaa;
                --bar-color:#F16335;
                --bar-thickness:40px;
                --bar-rounded: 3px;
                --bar-spacing:10px;

                font-family:sans-serif;
                width:var(--chart-width);
            }

            .chart-wrap .title{
                font-weight:bold;
                padding:1.8em 0;
                text-align:center;
                white-space:nowrap;
            }

            /* cuando definimos el gráfico en horizontal, lo giramos 90 grados */
            .chart-wrap.horizontal .grid{
                transform:rotate(-90deg);
            }

            .chart-wrap.horizontal .bar::after{
                /* giramos las letras para horizontal*/
                transform: rotate(45deg);
                padding-top:0px;
                display: block;
            }

            .chart-wrap .grid{
                margin-left:50px;
                position:relative;
                padding:5px 0 5px 0;
                height:100%;
                width:100%;
                border-left:2px solid var(--grid-color);
            }

            /* posicionamos el % del gráfico*/
            .chart-wrap .grid::before{
                font-size:0.8em;
                font-weight:bold;
                content:'0%';
                position:absolute;
                left:-0.5em;
                top:-1.5em;
            }
            .chart-wrap .grid::after{
                font-size:0.8em;
                font-weight:bold;
                content:'100%';
                position:absolute;
                right:-1.5em;
                top:-1.5em;
            }

            /* giramos las valores de 0% y 100% para horizontal */
            .chart-wrap.horizontal .grid::before, .chart-wrap.horizontal .grid::after {
                transform: rotate(90deg);
            }

            .chart-wrap .bar {
                width: var(--bar-value);
                height:var(--bar-thickness);
                margin:var(--bar-spacing) 0;
                background-color:var(--bar-color);
                border-radius:0 var(--bar-rounded) var(--bar-rounded) 0;
            }

            .chart-wrap .bar:hover{
                opacity:0.7;
            }

            .chart-wrap .bar::after{
                content:attr(data-name);
                margin-left:100%;
                padding:10px;
                display:inline-block;
                white-space:nowrap;
            }

        </style>
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Cargando...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary">DashBoard</h3>
                    </a>                    
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="views/style/images/man.png" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">Paciente #1</h6>
                            <span>Paciente</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Resumen</a>                   
                        <a href="tablas.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tablas</a>
                        <a href="graficos.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Graficos</a>       
                        <a href="index.php?c=pacientes&a=index" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pacientes</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>                    
                    <div class="navbar-nav align-items-center ms-auto">
                        <a href="index.php">
                            <img src="views/style/images/home.png" alt="" style="width: 40px; height: 40px;">                                
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="views/style/images/man.png" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">Paciente #1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="#" class="dropdown-item">Perfil</a>
                                <a href="#" class="dropdown-item">Opciones</a>
                                <a href="index.php" class="dropdown-item">Salir</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->


                <!-- Sale & Revenue Start -->
                <div class="container-fluid pt-5 px-5">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-line fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Cantidad de muestras - Atención</p>
                                    <h6 class="mb-0">426</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Promedio Alpha 1</p>
                                    <h6 class="mb-0">8.1 Hz</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-area fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Promedio Alpha 2</p>
                                    <h6 class="mb-0">11.3 Hz</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Promedio Beta 1</p>
                                    <h6 class="mb-0">15.7 Hz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sale & Revenue End -->


                <!-- Sales Chart Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Grafico de barras</h6>
                                    <a href="">Mostrar más</a>
                                </div>
                                <div class="chart-wrap"> <!-- quitar el estilo "horizontal" para visualizar verticalmente -->                                    
                                        <div class="bar" style="--bar-value:78%;" data-name="Alpha 1"></div>
                                        <div class="bar" style="--bar-value:57%;" data-name="Alpha 2"></div>
                                        <div class="bar" style="--bar-value:40%;" data-name="Beta 1"></div>   
                                        <div class="bar" style="--bar-value:68%;" data-name="Alpha 1"></div>
                                        <div class="bar" style="--bar-value:75%;" data-name="Alpha 2"></div>
                                        <div class="bar" style="--bar-value:82%;" data-name="Beta 1"></div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Grafica de distribución</h6>
                                    <a href="">Mostrar más</a>
                                    <!-- Barras Start -->
                                <div class="chart-wrap horizontal"> <!-- quitar el estilo "horizontal" para visualizar verticalmente -->
                                    
                                        <div class="bar" style="--bar-value:78%;" data-name="Alpha 1"></div>
                                        <div class="bar" style="--bar-value:57%;" data-name="Alpha 2"></div>
                                        <div class="bar" style="--bar-value:40%;" data-name="Beta 1"></div>   
                                    
                                </div>
                                </div>


                                




                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sales Chart End -->


                <!-- Widgets Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">                        
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="h-100 bg-light rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Calendario</h6>                                    
                                </div>
                                <div id="calender"></div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- Widgets End -->


                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4"></div>
                <!-- Footer End -->
            </div>
            <!-- Content End -->     
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="views/style/css/dash/lib/chart/chart.min.js"></script>
        <script src="views/style/css/dash/lib/easing/easing.min.js"></script>
        <script src="views/style/css/dash/lib/waypoints/waypoints.min.js"></script>
        <script src="views/style/css/dash/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="views/style/css/dash/lib/tempusdominus/js/moment.min.js"></script>
        <script src="views/style/css/dash/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="views/style/css/dash/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="views/style/css/dash/js/main.js"></script>
    </body>

</html>