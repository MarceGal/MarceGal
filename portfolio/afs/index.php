<?php include '../../inc/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include '../../inc/header-scripts.php' ?>

    <style>
    /* */



    body.afs .cover-header {
        background: -moz-linear-gradient(top, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#000000', GradientType=0);
        /* IE6-9 */
    }

    body.afs .cover-header .row-bg-wrap {
        /*mix-blend-mode: luminosity;*/
    }

    body.afs .cover-header .row-bg-wrap::before {
        background-image: url("<?=$cdn_url?>portfolio/afs/1400.900/bg.1.jpg");
        background-position: bottom center;
    }

    body.afs .portfolio-details .img-fluid {
        width: 100%;
    }

    body.afs .el-cliente,
    body.afs .el-cliente .container .row {
        height: 100vh;
    }

    body.afs .el-cliente::before {
        background-image: url("<?=$cdn_url?>portfolio/afs/1400.900/bg.1.jpg");
    }


    @media (max-width: 992px) {

        body.afs .el-cliente,
        body.afs .el-cliente .container .row {
            height: auto;
        }


    }
    </style>

</head>

<body class="project afs">


    <div class="preloader"></div>


    <main id="main">


        <!-- ======= Header ======= -->
        <header class="cover-header text-white">

            <div class="row-bg-wrap"></div>

            <div class="container">

                <a href="#header" class="">
                    <img src="<?=$cdn_url?>portfolio/afs/logo.svg" alt="" class="logo img-fluid">
                </a>

                <p class="font-weight-bold m-0">American Foodservice</p>
                <h1>Mucho más que <span class="featured-text">productos gastrónomicos</span></h1>
                <?=getSvgIcon ("scrollDownIcon");?>

            </div>

        </header>

        <!-- End Header -->

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">

            <div class="el-cliente position-relative p-md-5 bg-secondary using-image blend-luminosity">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 p-5 p-md-5 align-self-lg-start align-content-sm-end">

                            <div class="section-title">
                                <p class="text-dark">Intro</p>
                                <h2>El cliente</h2>
                            </div>

                            <p><strong>American FoodService</strong> es una organización regional dedicada al
                                desarrollo, comercialización y distribución de productos gastronómicos.
                                Con presencia en <strong class="featured-text">8 países</strong> dentro de Latinoamérica, son el mayor distribuidor especializado en
                                la región.</p>


                        </div>


                        <div class="col-md-6 px-0 px-md-5">

                            <img class="img-fluid float-md-right portrait shadowed mt--30vh rounded sm-not-rounded"
                                src="<?=$cdn_url?>portfolio/afs/1400.900/bg.1.portrait.jpg" alt="" loading="lazy">

                            

                        </div>

                    </div>

                </div><!-- End container -->

            </div><!-- End Main container -->


            <div class="position-relative p-5 p-5 bg-secondary el-problema ">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 px-0 px-md-5 md-order-2">

                            <img class="img-fluid float-md-right portrait shadowed rounded mt--10vh"
                                src="<?=$cdn_url?>portfolio/afs/1400.900/bg.2.portrait.jpg" alt="" loading="lazy">

                        </div>
                        
                        <div class="col-lg-6 pb-3 pt-md-5 md-order-1 p-lg-0 bg-secondary rounded align-self-end">

                            <div class="section-title">
                                <p class="text-dark">Aquí vamos con </p>
                                <h2>el desafio</h2>
                            </div>

                            <p>Ganar terreno en canales digitales. Llevar adelante la difusión de su propuesta de valor: productos y servicios a segmentos especificos.</p>

                        </div>

                    </div>

                </div><!-- End container -->

            </div>



            <div class="la-solucion  position-relative overflow-hidden p-5 bg-primary using-image blend-luminosity">

                <div class="spacer py-md-5"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-5 p-md-5 align-self-lg-start align-content-sm-end">

                            <div class="section-title">
                                <p class="text-dark">El plan y</p>
                                <h2>la solución</h2>
                            </div>

                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <p>Definir una estrategia y flujos de trabajo que permitan la producción ágil de contenidos para canales comerciales.</p>

                            <p><strong>Canales:</strong></p>

                            <ul>
                                <li>Plataformas colaborativas</li>
                                <li>Mensajeria y Correos electrónicos</li>
                                <li>Redes sociales</li>
                            </ul>

                            <p><strong>Mis responsabilidades:</strong></p>

                            <ul>
                                <li>Estrategia de contenidos</li>
                                <li>Diseño y comunicación</li>
                                <li>Analítica</li>
                            </ul>

                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div><!-- End section -->

            <div class="la-estrategia  bg-secondary position-relative overflow-hidden p-5 using-image ">

                <div class="spacer py-md-5"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <div class="section-title">
                                <p class="text-dark">Manos a la obra</p>
                                <h2>El plan de acción</h2>
                            </div>

                        </div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start"> </div>


                        <div class="col-lg-6 align-self-lg-start">

                            <ul>
                                <li>Definición de canales. Integración entre ellos. Percepción de la marca.</li>
                                <li>Segmentos y arquetipos. </li>
                                <li>FODA de la organización, productos/servicios, mercado. </li>
                                <li>Benchmark de la competencia.</li>
                                <li>Definición y revisión de referentes.</li>
                                <li>Definición de Kpis a trabajar. </li>
                                <li>Definición de ejes temáticos.</li>
                                <li>Definición de línea editorial.</li>
                                <li>Desarrollo progresivo de sistema gráfico.</li>
                            </ul>

                        </div>

                        <div class="col-lg-6 align-self-lg-start">

                            <ul>
                                <li>Composición visual de contenidos. Imagen, audio y video.</li>
                                <li>Redacción.</li>
                                <li>Curación de anuncios de la organización.</li>
                                <li>Planificación, calendarización y seguimiento de contenidos.</li>
                                <li>Elaboración de preguntas y respuestas frecuentes.</li>
                                <li>Recolección y consideración de datos.</li>
                                <li>Elaboración de informes.</li>
                            </ul>

                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div><!-- End section -->

            <div class="container">

                <div class="spacer pt-0 pb-0 pb-sm-5"></div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="owl-carousel portfolio-details-carousel">

                            <img src="<?=$cdn_url?>portfolio/afs/1400.900/post_r1_c1_s1.jpg" class="img-fluid lazy"
                                loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/afs/1400.900/post_r1_c2_s1.jpg" class="img-fluid lazy"
                                loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/afs/1400.900/post_r1_c3_s1.jpg" class="img-fluid lazy"
                                loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/afs/1400.900/post_r1_c4_s1.jpg" class="img-fluid lazy"
                                loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/afs/1400.900/post_r1_c5_s1.jpg" class="img-fluid lazy"
                                loading="lazy">

                        </div>

                    </div>
                

                </div>

                <div class="spacer pb-3"></div>

            </div><!-- End section -->


            <div class=" bg-secondary position-relative overflow-hidden p-5 using-image ">

                <div class="spacer py-md-5"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <div class="section-title">
                                <p class="text-dark">Work in progress</p>
                                <h2>Mi misión actual</h2>
                            </div>

                        </div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <p>Mi misión en <b>American Foodservice</b> es acompañar el crecimiento de la organización.
                                Dar soporte a los equipos comerciales y nutrir sus canales digitales, desde lo
                                estratégico hasta lo creativo.</p>

                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div><!-- End section -->


        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <?php include '../../inc/footer.php' ?>