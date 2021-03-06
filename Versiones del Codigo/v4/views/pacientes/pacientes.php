<!DOCTYPE html>  
<html lang="en">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.14.1/dist/xlsx.full.min.js"></script>
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
                    <a href="index.php?c=dashboard&a=index" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary">DashBoard</h3>
                    </a>                    
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img src="views/style/images/man.png" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>                        
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="index.php?c=dashboard&a=index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>                   
                        <a href="index.php?c=tablas&a=index" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Lista de pacientes</a>       
                        <a href="index.php?c=pacientes&a=index" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Pacientes</a>
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
                        <div class="nav-item dropdown">
                            <a href="index.php?c=dashboard&a=index" class="nav-link" >
                                <img src="views/style/images/dash.png" alt="" style="width: 40px; height: 40px;">
                            </a>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="index.php" class="nav-link" >
                                <img class="me-lg-2" src="views/style/images/home.png" alt="" style="width: 40px; height: 40px;">
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->
                <!-- Form Start -->
                <div class="container-fluid pt-4 px-xl-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-lg-5">
                                <h6 class="mb-4">INFORMACI??N DEL PACIENTE</h6>
                                <form id="p_nuevo" name="p_nuevo" method="POST" action="index.php?c=pacientes&a=guarda" autocomplete="off" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="p_name" class="col-sm-2 col-form-label">Nombre:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_nombre" name="p_nombre">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="p_apellido" class="col-sm-2 col-form-label">Apellidos:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_apellido" name="p_apellido">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3" id="p_genero" name="p_genero">
                                        <legend class="col-form-label col-sm-2 pt-0">G??nero:</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="p_genero"
                                                       id="p_generof" value="Femenino" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Femenino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="p_genero"
                                                       id="p_generom" value="Masculino">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Masculino
                                                </label>
                                            </div>
                                        </div>                                        
                                    </fieldset>   
                                    <label for="p_edad" class="col-sm-2 col-form-label">Edad:</label> 
                                    <div class="mb-3">
                                        <select class="form-select mb-3" aria-label="menuEdad" id="p_edad" name="p_edad">
                                            <option selected>Abrir este men?? de selecci??n...</option>
                                            <option value="3">Tres</option>
                                            <option value="4">Cuatro</option>
                                            <option value="5">Cinco</option>
                                            <option value="6">Seis</option>
                                            <option value="7">Siete</option>
                                        </select>  
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary">Agregar</button>                                    
                                </form>
                            </div>
                        </div>  
                        <div class="col-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Lista de pacientes</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>                                                
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">G??nero</th>
                                                <th scope="col">Edad</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($data["pacientes"] as $dato) {
                                                echo "<tr>";
                                                echo "<td>" . $dato["p_id"] . "</td>";
                                                echo "<td>" . $dato["p_nombre"] . "</td>";
                                                echo "<td>" . $dato["p_apellido"] . "</td>";
                                                echo "<td>" . $dato["p_genero"] . "</td>";
                                                echo "<td>" . $dato["p_edad"] . "</td>";
                                                /* echo "<td><a href='index.php?c=pacientes&a=modificar&p_id=".$dato["p_id"]."'<i class='fa fa-keyboard'></i></a></td>"; */
                                                echo "<td><a href='index.php?c=pacientes&a=eliminar&p_id=" . $dato["p_id"] . "'<i class='fa fa-times'></i></a></td>";
                                                echo "</tr>";
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-light rounded h-100 p-lg-5">
                                <h6 class="mb-4">INFORMACI??N DE TERAPIA</h6>                                
                                <select class="form-select mb-3" aria-label="menuFiltrado" id="p_ids" name="p_ids">
                                    <option selected>Abrir este men?? de selecci??n...</option>                                    
                                    <?php
                                    foreach ($data["pacientes"] as $dato) {
                                        echo "<option value='" . $dato["p_id"] . "'>" . $dato["p_id"] . "<p> - </p>" . $dato["p_nombre"] . "<p> </p>" . $dato["p_apellido"] . "</option>";
                                    }
                                    ?>

                                </select>  
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Agregar archivo de terapia...</label>
                                    <div id="wrapper">
                                        <input class="form-control" type="file" id="input-excel"/>
                                    </div> 
                                </div>      
                                <button type="submit" class="btn btn-primary" onclick="cargardatos()">Agregar</button>                             
                            </div>
                        </div>  



                    </div>
                </div>
                <!-- Form End -->

                <!-- Table Start -->

                <!-- Table End -->
                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">                    

                </div>
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
        <script type="text/javascript">
                                    var info;
                                    $('#input-excel').change(function (e) {
                                        var reader = new FileReader();
                                        reader.readAsArrayBuffer(e.target.files[0]);
                                        reader.onload = function (e) {
                                            var data = new Uint8Array(reader.result);
                                            var wb = XLSX.read(data, {type: 'array'});
                                            var htmlstr = XLSX.write(wb, {sheet: "Hoja1", type: 'binary', bookType: 'html'});
                                            //$('#wrapper')[0].innerHTML += htmlstr;
                                            info = wb.Sheets.Hoja1;
                                        };
                                    });
                                    function cargardatos() {
                                        var datos = [];
                                        //var datos = [[nombreCol1,nombreCol2, nombreCol3], [reg1, reg2, reg3]];
                                        var numCelanterior = 1;
                                        var contadorColumna = 1;
                                        var registro = [];
                                        $.each(info, function (celda, valor) {
                                            if (typeof valor.v !== 'undefined') {
                                                if (valor.v) {
                                                    numCelda = parseInt(celda.substring(1, celda.length));
                                                    if (numCelda > numCelanterior) {
                                                        registro.push("/");
                                                        numCelanterior = numCelda;
                                                    }
                                                    var dato = valor.v;
                                                    dato = dato.toString();
                                                    registro.push(dato);
                                                }
                                            }
                                        });
                                        var url = "index.php?c=pacientes&a=guardasin";
                                        var select = document.getElementById('p_ids');
                                        select.addEventListener('change',
                                                function () {
                                                    var p_ids = this.options[select.selectedIndex];
                                                });

                                         p_ids = p_ids.value;
                                         /*
                                         $.ajax({
                                         type: "POST",
                                         url: url,
                                         datatype: 'JSON',
                                         data: {arrayDatos: JSON.stringify(registro), idsenal: p_ids},
                                         success: function (data) {
                                         alert("success:", data);
                                         },
                                         failure: function (errMsg) {
                                         alert("error:", errMsg);
                                         }
                                         });*/

                                        var form = $('<form class="hide" action="' + url + '" method="post">' +
                                                '<input type="text" name="idsenal" value="' + p_ids + '"/>' +
                                                '<input type="text" name="arrayDatos" value="' + registro + '" />' +
                                                '</form>');
                                        $('body').append(form);
                                        $(form).submit();
                                    };
        </script>
        <!-- Template Javascript -->
        <script src="views/style/css/dash/js/main.js"></script>
    </body>

</html>