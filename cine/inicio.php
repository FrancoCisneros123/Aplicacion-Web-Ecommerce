<?php
session_start();

if(!isset($_SESSION["emailLogin"])){ //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-fluid" style="padding: 0%;">
        <!--barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-3 border-bottom border-danger">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img class="img-thumbnail" src="imagenes/logo_inicio_opcion2.jpeg" alt="CINE EN CARTELERA"
                        id="logonav">
                    <!--logo en el extremo superior izquierdo-->
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="MenuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.html">CARTELERA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="complejos.html">COMPLEJOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="precios.html">PRECIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">CONTACTO</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!--etiqueta de boostrap 5 que coloca elementos en el lugar derecho (en este caso la lupa)-->

                        <li class="nav-item" id="busqueda">
                            <form class="d-flex">
                                <input class="form-control me-2 " type="search" placeholder="Ingresa tu busqueda"
                                    aria-label="Search">
                                <button class="btn btn-outline-warning" type="submit">Buscar</button>
                            </form>
                        </li>

                        <!--boton de cerrar sesion-->
                        <li class="nav-item" id="cerrar-sesion">
                            <form class="d-flex">
                            <a href="desloguear.php" class="btn btn-outline-danger" type="submit">Logout</a>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!--Main de la pagina: DE MOMENTO ES SOLO PRUEBA DEL CARRUSEL, MODIFICAR DE SER NECESARIO-->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="imagenes/theflashcarrusel.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="imagenes/barbiecarrusel.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/spidermancarrusel.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container" id="textocartelera">
            <div class="row">
                <div class="col-12">
                    <h2>CARTELERA</h2>
                </div>
            </div>
        </div>

        <!--Selects para el complejo y el dia
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" id="selectcomplejo">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecciona un complejo</option>
                        <option value="canning">Canning</option>
                        <option value="madero">Madero</option>
                        <option value="lomas">Lomas</option>
                    </select>
                </div>
                <div class="col-12 col-lg-6" id="selectfecha">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecciona una fecha</option>
                        <option value="1">Hoy</option>
                        <option value="2">8/10</option>
                        <option value="3">9/10</option>
                        <option value="4">10/10</option>
                        <option value="5">11/10</option>
                        <option value="6">12/10</option>
                        <option value="7">13/10</option>
                        <option value="8">14/10</option>
                        <option value="9">15/10</option>
                        <option value="10">16/10</option>
                        <option value="11">17/10</option>
                        <option value="12">18/10</option>
                    </select>
                </div>
            </div>
        </div> -->



        <!--cards-->
        <div class="container">


            <div class="row">

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/argentina1985_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/argentina1985.html" class="stretched-link"></a>

                        <!--    <div class="card-body">
                        <h5 class="card-title">Argentina 1985</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/argentina1985.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>


                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/barbie_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/barbie.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Barbie</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/barbie.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/caceria_en_venecia_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/caceriaEnVenecia.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Caceria en venecia</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/caceriaEnVenecia.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">


                    <div class="card card-individual">
                        <img src="imagenes/el_conformista_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/elConformista.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">El conformista</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/elConformista.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/el_exorcista_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/elExorcista.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">El exorcista</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/elExorcista.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/elemental_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/elementos.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Elementos</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/elementos.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/five_nigths_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/fiveNigthsAtFreddys.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Five nigths at freddy's</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/fiveNigthsAtFreddys.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/flash_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/flash.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Flash</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/flash.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/la_monja2_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/laMonja2.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">La monja 2</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/laMonja2.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/openhaimer_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/openhaimer.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Openhaimer</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/openhaimer.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/pow_patrol_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/powPatrol.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Pow patrol</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/powPatrol.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3 ">

                    <div class="card card-individual">
                        <img src="imagenes/saw_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/saw.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Saw</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/saw.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/sonido_de_libertad_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/sonidoDeLibertad.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Sonido de libertad</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/sonidoDeLibertad.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/spiderman_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/spiderman.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Spiderman across the spider-verse</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/spiderman.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/tortugas_ninja_caos_mutante_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/tortugasNinjasCaosMutante.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Las tortugas ninja caos mutante</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/tortugasNinjasCaosMutante.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>

                <div class="col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3">

                    <div class="card card-individual">
                        <img src="imagenes/scream_cartelera.jpg" class="card-img-top" alt="...">
                        <a href="peliculas/scream.html" class="stretched-link"></a>

                        <!--<div class="card-body">
                        <h5 class="card-title">Scream VI</h5>
                        <p class="card-text">...</p>
                        <a href="peliculas/scream.html" class="stretched-link"></a>
                    </div> -->

                    </div>
                </div>


            </div>

        </div>

    </div>

    </div>

    <!--estrenos-->
    <div class="container cards">

        <div class="container" id="textoproximamente">
            <div class="row">
                <div class="col-12">
                    <h2>PROXIMAMENTE</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!--El justiciero 3-->
            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/eljusticiero.webp" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">EL JUSTICIERO 3</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/los_juegos_del_hambre_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">LOS JUEGOS DEL HAMBRE</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/aquaman2_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">AQUAMAN 2</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/transformers_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">TRANSFORMERS</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <!--El duelo-->
            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/elduelo.png" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">EL DUELO</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <!--Milagro-->

                <div class="card card-individual-estreno">
                    <img src="imagenes/milagro.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">MILAGRO</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/the_marvels_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">THE MARVELS</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/after_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">AFTER PARA SIEMPRE</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4">

                <div class="card card-individual-estreno">
                    <img src="imagenes/bluebettle_proximamente.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">BLUE BETTLE</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>



        </div>
    </div>

    <!--footer-->
    <div class="container-fluid">
        <div class="row p-5 pb-2 bg-dark text-white">

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h3">CINE EN CARTELERA</p>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">

                <p class="h5 mb-5">SOBRE NOSOTROS</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="terminos.html">Terminos y condiciones</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="preguntasfrecuentes.html">Preguntas
                        frecuentes</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="inicio.html">Cartelera</a>
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-5">COMPLEJOS</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_canning.html">Canning</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_puerto.html">Madero</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_lomas.html">Lomas de zamora</a>
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-5">CONTACTO</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Whatsapp: +54 11 3957-3564</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Instagram: cine_en_cartelera_ok</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">X: cine_en_cartelera_x</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Tik-tok: cine_en_cartelera_tt</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Mail: cineencartelera@gmail.com</a>
                </div>

            </div>

            <div class="col-xs-12 pt-4">
                <!--pt = padding top 4-->
                <p class="text-white text-center">Copyright - todos los derechos reservados © 2023</p>
            </div>
        </div>
    </div>
</body>

</html>