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
    body.pixowl .cover-header {

        background: -moz-linear-gradient(top, rgba(100, 180, 0, 0.2) 40%, rgba(249, 119, 0, 1) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(100, 180, 0, 0.2) 40%, rgba(249, 119, 0, 1) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(196, 169, 0, 0.3) 0%, rgba(211, 169, 0, 1) 100%)
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#000000', GradientType=0);
        /* IE6-9 */
    }


    body.pixowl .cover-header .row-bg-wrap::before {
        background-image: url("<?=$cdn_url?>portfolio/pixowl/1400.900/0.jpg");
    }

    
    body.pixowl .cover-header .logo {
        /*max-width: 200px;*/
    }

    body.pixowl .portfolio-details .img-fluid {
        width: 100%;
    }

    body.pixowl .el-cliente,
    body.pixowl .el-cliente .container .row {
        height: 100vh;
    }

    body.pixowl .el-cliente::before {
        background-image: url("<?=$cdn_url?>portfolio/pixowl/1400.900/bg.2.jpg");
    }


    @media (max-width: 992px) {

        body.pixowl .el-cliente,
        body.pixowl .el-cliente .container .row {
            height: auto;
        }


    }
    </style>

</head>

<body class="project pixowl">


    <div class="preloader"></div>


    <main id="main">


        <!-- ======= Header ======= -->
        <header class="cover-header">

            <div class="row-bg-wrap"></div>

            <div class="container">

                <a href="#header" class="">
                    <img src="<?=$cdn_url?>portfolio/pixowl/logo.svg" alt="" class="logo img-fluid">
                </a>

                <p class="font-weight-bold m-0">Mobile Games Studio</p>
                <h1>Creadores de mundos virtuales para <span class="featured-text">millones</span> de usuarios</h1>
                <?=getSvgIcon ("scrollDownIcon");?>

            </div>

        </header>

        <!-- End Header -->

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">


            <div class="el-cliente position-relative overflow-hidden p-5 bg-primary  using-image blend-luminosity">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-5 p-sm-3 p-md-5 align-self-lg-start align-content-sm-end">

                            <div class="section-title">
                                <p class="text-dark">Intro</p>
                                <h2>El cliente</h2>
                            </div>

                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <p><strong>Pixowl Inc.</strong> es una compañía de desarrollo de videojuegos móviles con sede en San Francisco. Con un equipo técnico y artístico,  de mirada sensible y nostálgica, crean mundos virtuales para millones de usuarios.</p>

                        </div>

                    </div>

                </div><!-- End container -->

            </div><!-- End Main container -->


            <div class="el-problema position-relative p-md-5 bg-secondary">

                <div class="container">


                    <div class="row">

                        <div class="col-lg-6 p-0 p-md-5">

                            <img 
                            src="<?=$cdn_url?>portfolio/pixowl/cover.jpg"
                            class="img-fluid float-md-right portrait shadowed md-not-rounded rounded mt--50vh" 
                            alt="" 
                            loading="lazy"
                            />

                        </div>

                        <div class="col-lg-6 p-5 mt-sm-5 mt-lg-0 md-not-rounded rounded align-self-end">

                            <div class="section-title">
                                <p class="text-dark">Aquí vamos con </p>
                                <h2>el desafio</h2>
                            </div>

                            <p>Construir reputación de marca ante inversores, medios especializados y su comunidad de usuarios. Acompañar las estrategias de marketing, alinearse al roadmap comercial, prensa y de lanzamientos. Reflejar el espíritu y la cultura de la marca y sus productos. Resolver con simpleza.</p>

                        </div>

                    </div>

                </div><!-- End container -->

            </div>



            <div class="position-relative overflow-hidden p-5 bg-primary la-solucion using-image blend-luminosity">

                <div class="spacer py-md-5"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-5 p-md-5 align-self-lg-start align-content-sm-end">

                            <div class="section-title">
                                <p class="text-dark">El plan </p>
                                <h2>La solución</h2>
                            </div>

                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <p>Desarrollar los canales digitales de la compañía y sus productos. Desde una plataforma de publicación de contenidos, hasta  los microsites de varios de sus lanzamientos de productos.</p>
                            
                            <p><strong>Canales:</strong></p>

                            <ul>
                                <li>Sitio Web oficial</li>
                                <li>Micrositios de productos</li>
                            </ul>

                            <p><strong>Mis responsabilidades:</strong></p>

                            <ul>
                                <li>Diseño UI</li>
                                <li>Desarrollo web</li>
                            </ul>


                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div>
            
            <!-- End section -->

            <div class="container">

                <div class="spacer p-0 py-0 py-sm-3 py-md-5"></div>

                <div class="row">

                    <div class="col-lg-12">

                        <img 
                        src="<?=$cdn_url?>portfolio/pixowl/1400.900/1.jpg" 
                        class="img-fluid md-shadowed rounded md-not-rounded fade-up" 
                        alt=""
                        >

                        <div class="spacer py-sm-3 py-md-5"></div>

                        <img src="<?=$cdn_url?>portfolio/pixowl/1400.900/2.jpg" class="img-fluid md-shadowed rounded md-not-rounded fade-up" alt="">

                        <div class="spacer py-sm-3 py-md-5"></div>

                        <img src="<?=$cdn_url?>portfolio/pixowl/1400.900/3.jpg" class="img-fluid md-shadowed rounded md-not-rounded fade-up" alt="">

                        <div class="spacer py-sm-3 py-md-5"></div>

                        <img src="<?=$cdn_url?>portfolio/pixowl/1400.900/4.jpg" class="img-fluid md-shadowed rounded md-not-rounded fade-up" alt="">
                        
                        <div class="spacer py-sm-3 py-md-5"></div>


                    </div>

                </div>

            </div>

        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <?php include '../../inc/footer.php' ?>