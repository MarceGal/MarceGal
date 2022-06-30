<?php include '../../inc/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include '../../inc/header-scripts.php' ?>

    <style>
    /* */

    body.swancustombasses .cover-header 
    {
        background: -moz-linear-gradient(top, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(0, 0, 0, .3) 60%, rgba(0, 0, 0, .7) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#000000', GradientType=0);
        /* IE6-9 */
    }

    /* body.swancustombasses .cover-header .row-bg-wrap {  mix-blend-mode: luminosity;  } */

    /* body.swancustombasses .cover-header .logo { max-width: 100px;  }*/

    body.swancustombasses .cover-header .row-bg-wrap::before 
    {
        background-image: url("<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.jpg");
    }

    /*body.swancustombasses .portfolio-details { background: rgba(0,0,0,0.7); }*/

    body.swancustombasses .portfolio-details .img-fluid { width: 100%;  }

    body.swancustombasses .el-cliente,
    body.swancustombasses .el-cliente .container .row {
        height: 100vh;
    }

    body.swancustombasses .el-cliente::before {
        background-image: url("<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.jpg");
    }

    body.swancustombasses .la-estrategia::before {
        background-image: url("<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.3.primary.jpg");
    }


    @media (max-width: 992px) {

        body.swancustombasses .el-cliente,
        body.swancustombasses .el-cliente .container .row {
            height: auto;
        }


    }

    .plyr {
        --plyr-color-main: #35e888;
        --plyr-video-background: #35e888;
        border-radius: .6rem !important;
    }
    </style>

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css" />

</head>

<body class="project swancustombasses">


    <div class="preloader"></div>


    <main id="main">


        <!-- ======= Header ======= -->
        <header class="cover-header text-white">

            <div class="row-bg-wrap"></div>

            <div class="container">

                <a href="#header" class="">
                    <img src="<?=$cdn_url?>portfolio/swancustombasses/logo.svg" alt="" class="logo img-fluid">
                </a>

                <p class="font-weight-bold m-0">Swan Custom Basses</p>
                <h1>Desde <span class="featured-text">Argentina</span>, al mundo</h1>
                <?=getSvgIcon ("scrollDownIcon");?>

            </div>

        </header>

        <!-- End Header -->

        <!-- ======= Portfolio Details ======= -->

        <div id="portfolio-details" class="portfolio-details">

            <div class="el-cliente position-relative p-md-5 bg-secondary  using-image blend-luminosity">

                <div class="container">

                    <div class="row">
                        <div class="col-md-6 p-5 align-self-lg-center align-content-sm-end">

                            <div class="section-title">
                                <p class="text-dark">Intro</p>
                                <h2>El cliente</h2>
                            </div>

                            <p>Desde la ciudad de Buenos Aires, más precisamente desde el barrio porteño de La Paternal, <strong>Swan Custom Basses</strong>, una pequeña fábrica boutique de instrumentos eléctricos de cuerdas, proyecta su producción a varios mercados internacionales.
                            </p>


                        </div>


                        <div class="col-md-6 px-0 px-md-5 align-self-lg-center">

                            <img class="img-fluid float-md-right portrait shadowed rounded sm-not-rounded"
                                src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.portrait.jpg" 
                                alt=""
                                loading="lazy"
                                >

                        </div>

                    </div>

                </div><!-- End container -->

            </div><!-- End Main container -->


            <div class="position-relative p-5 bg-secondary el-problema ">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 px-sm-5 pb-md-5 md-order-2">

                            <img class="img-fluid float-md-right portrait shadowed rounded mt--10vh"
                                src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.2.portrait.jpg" 
                                alt=""
                                loading="lazy"
                                >

                        </div>

                        <div class="col-lg-6 pb-3 pt-md-5 md-order-1 p-lg-0 bg-secondary rounded align-self-end">

                            <div class="section-title">
                                <p class="text-dark">Aquí vamos con</p>
                                <h2>el desafio</h2>
                            </div>

                            <p>Los instrumentos musicales son artefactos especiales para consumidores exigentes y curiosos por los detalles. <u>El desafio fue crear un canal digital que permita reducir los tiempos de atención al cliente.</u></p>

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
                                <p class="text-dark">El plan </p>
                                <h2>La solución</h2>
                            </div>

                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                            <p>Entregar un catálogo en linea, que transmita los valores de la marca, y cuente con especificaciones tecnicas de productos. Canalizar consultas comerciales a través de mensajeria instantanea.</p>

                            <p><strong>Mis responsabilidades:</strong></p>

                            <ul>
                                <li>Diseño UI/UX</li>
                                <li>Copywriting y traducciones</li>
                                <li>Implementación técnica</li>
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
                                <li> Definición de segmentos y usuarios.</li>
                                <li> Definición FODA de la organización, productos/servicios, mercado.
                                <li> Revisión de referentes y competencia.</li>
                                <li> Definición de Kpis.</li>
                                <li> Definición de contenidos.</li>
                                <li> Diseño de wireframes.</li>
                            </ul>

                        </div>

                        <div class="col-lg-6 align-self-lg-start">

                            <ul>
                                <li> Definición de línea editorial. UX Writing y traducciones</li>
                                <li> Desarrollo progresivo de sistema gráfico.</li>
                                <li> Composición visual de contenidos. Imagen, audio y video.</li>
                                <li> Recolección y consideración de datos.</li>
                                <li> Elaboración de informes.</li>
                                <li> Implementación técnica del website</li>
                            </ul>

                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div><!-- End section -->

            <div class="la-solucion position-relative overflow-hidden p-5 bg-primary using-image blend-luminosity">

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

                            <p>Entregar un catálogo en linea, que transmita los valores de la marca, y cuente con especificaciones tecnicas de productos. Canalizar consultas comerciales a través de mensajeria instantanea.</p>

                            <p><strong>Mis responsabilidades:</strong></p>

                            <ul>
                                <li>Diseño UI/UX</li>
                                <li>Copywriting y traducciones</li>
                                <li>Implementación técnica</li>
                                <li>Analítica</li>
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

                            <img 
                            src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.1.jpg" 
                            class="img-fluid lazy" 
                            loading="lazy"
                            />

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.2.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.3.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.4.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.5.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.6.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.7.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">
                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/mobile.prints.8.jpg" class="img-fluid md-shadowed rounded md-not-rounded" loading="lazy">

                        </div>

                    </div>

                </div>

                <!-- End section -->

                <div class="spacer pb-3"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <img 
                            src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.1.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.2.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.3.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.4.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.5.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.6.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.7.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.8.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.9.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.10.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.11.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />

                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.12.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer py-sm-3 py-md-5"></div>

                            <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/desktop.prints.13.jpg" 
                            class="img-fluid px-4 py-2 p-sm-0 md-shadowed rounded md-not-rounded fade-up" 
                            alt=""
                            />
                            
                            <div class="spacer pb-3 py-sm-3 py-md-5"></div>

                        </div>

                    </div>

                </div>

                <?php 

                /*
                
                <div class="row">

                    <div class="col-lg-12" class="md-shadowed md-rounded">

                        <div class="plyr__video-embed plyr" id="player">
                            <iframe <?php 

                                $source='https://player.vimeo.com/video/';
                                $source.='536018204?';
                                $source.='loop=true&';
                                $source.='byline=false&';
                                $source.='portrait=false&';
                                $source.='title=false&';
                                $source.='speed=true&';
                                $source.='transparent=true&';
                                $source.='gesture=media&';
                                $source.='autoplay=false&';

                                ?> src="<?php echo $source; ?>" allowfullscreen allowtransparency
                                allow="autoplay"></iframe>
                        </div>

                    </div>

                    <script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>
                    <script>
                    //https://github.com/sampotts/plyr
                    const player = new Plyr('#player', {
                        'controls': ['play-large'],
                    });
                    </script>

                </div>

                */

                ?>

                <div class="spacer py-md-5"></div>

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

                            <p>Mi misión en <b>Swan Custom Basses</b> es colaborar en su crecimiento. Nutrir nutrir su
                                sitio web con nuevos contenidos comerciales y creativos.</p>

                        </div>


                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>

            </div><!-- End section -->

            <div class="tecnologia position-relative p-md-5 bg-primary using-image blend-luminosity">
                
                <div class="spacer py-md-5"></div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 p-5 align-self-lg-center align-content-sm-end">                            

                            <div class="section-title">
                                <p class="text-dark">Nerd info</p>
                                <h2>Tecnología</h2>
                            </div>

                        </div>
                        

                        <div class="col-lg-8 px-5 px-md-5 align-self-lg-center">

                            <img class="img-fluid float-md-right"
                                src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.4.portrait.png" alt=""
                                loading="lazy">
                            
                        </div>

                    </div>

                    <div class="spacer py-4 py-md-5"></div>

                    <div class="row">
                
                        <div class="col-lg-6 px-5 align-self-lg-start">
                        
                            <p>Lenguaje de programación:</p>
                                                            
                            <ul>
                                <li><a href="https://www.php.net/" target="_blank" rel="no-follow" >PHP<i></i></a></li>
                            </ul>

                            <p>Gestor de Datos:</p>
                                                            
                            <ul>
                                <li><a href="https://www.mysql.com/" target="_blank" rel="no-follow" >MySQL</a></li>
                            </ul>

                            <p>Gestor de Contenidos:</p>
                                                            
                            <ul>
                                <li><a href="https://www.php.net/" target="_blank" rel="no-follow" >WordPress</a></li>
                                <li><a href="https://kb.wpbakery.com/" target="_blank" rel="no-follow" >WPBakery</a></li>                            
                            </ul>

                            <p>Tipografías:</p>
                                                            
                            <ul>
                                <li><a href="https://fonts.google.com/" target="_blank" rel="no-follow" >Google Font</a></li>
                            </ul>

                        </div>

                        <div class="col-lg-6 px-5 align-self-lg-start">

                          <p>Librerías:</p>
                                                            
                            <ul>
                                <li><a href="https://modernizr.com/" target="_blank" rel="no-follow">Modernizr</a></li>
                                <li><a href="https://jquery.com/" target="_blank" rel="no-follow">jQuery</a></li>
                                <li><a href="https://github.com/jquery/jquery-migrate" target="_blank" rel="no-follow">jQuery Migrate</a></li>
                                <li><a href="https://swiperjs.com/" target="_blank" rel="no-follow">Swiper Slider</a></li>
                            </ul>

                            <p>UI Frameworks:</p>
                                                            
                            <ul>
                                <li><a href="https://getmdl.io/" target="_blank" rel="no-follow">Google Material Design Lite</a></li>
                            </ul>
                            
                            <p>CDN´s y Seguridad:</p>
                                                                
                            <ul>
                                <li><a href="https://www.cloudflare.com/es-la/" target="_blank" rel="no-follow">Cloudflare</a></li>
                                <li><a href="https://es.jetpack.com/features/design/content-delivery-network/" target="_blank" rel="no-follow">Jetpack CDN</a></li>
                            </ul>

                            <p>SEO:</p>
                                                            
                            <ul>
                                <li><a href="https://yoast.com/" target="_blank" rel="no-follow">Yoast SEO</a></li>
                                <li><a href="https://search.google.com/search-console" target="_blank" rel="no-follow">Google Search Console</a></li>
                            </ul>

                            <p>Analitica:</p>
                                                            
                            <ul>
                                <li><a href="https://marketingplatform.google.com/intl/es/about/analytics/" target="_blank" rel="no-follow">Google Analytics</a></li>
                                <li><a href="https://es.jetpack.com/features/" target="_blank" rel="no-follow">Jetpack Analytics</a></li>
                            </ul>

                            

                        </div>

                    </div>

                </div><!-- End container -->

                <div class="spacer py-md-5"></div>


            </div><!-- End Main container -->


        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <?php include '../../inc/footer.php' ?>