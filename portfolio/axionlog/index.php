<?php include '../../inc/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php include '../../inc/styles.php' ?>

  <style>

    /* */
    


    body.axionlog .cover-header
    {
      background: -moz-linear-gradient(top, rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
    }

    body.axionlog .cover-header .row-bg-wrap  {  /*mix-blend-mode: luminosity;*/ } 

    body.axionlog .cover-header .row-bg-wrap::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/axionlog/1400.900/bg.2.1.jpg");    
    }
    
    body.axionlog .portfolio-details .img-fluid { width: 100%; }

    body.axionlog .el-cliente,
    body.axionlog .el-cliente .container .row
    body.axionlog .la-estrategia,
    body.axionlog .la-estrategia .container .row
    {      
      height: 100vh;
    }

    body.axionlog .el-cliente::before
    {      
      background-image: url("<?=$cdn_url?>portfolio/axionlog/1400.900/bg.3.primary.jpg");
    }

    body.axionlog .la-estrategia::before
    {      
      background-image: url("<?=$cdn_url?>portfolio/axionlog/1400.900/bg.6.jpg");
    }

    

    
    @media (max-width: 992px) {
       
      body.axionlog .el-cliente,
      body.axionlog .el-cliente .container .row
      body.axionlog .la-estrategia,
      body.axionlog .la-estrategia .container .row
      {      
        height: auto;
      }


    }


  </style>

</head>

<body class="project axionlog">

  
  <div class="preloader"></div>
  
  
  <main id="main">


    <!-- ======= Header ======= -->
    <header  class="cover-header text-white">

      <div class="row-bg-wrap"></div>

      <div class="container">

          <a href="#header" class="">
            <img src="<?=$cdn_url?>portfolio/axionlog/logo.svg" alt="" class="logo img-fluid">
          </a>

          <p class="font-weight-bold m-0">Axionlog</p>
          <h1><span class="featured-text">Abastecimiento en toda LATAM</span>, desde un solo lugar</h1>  
          <?=getSvgIcon ("scrollDownIcon");?>   

      </div>

    </header>

    <!-- End Header -->
  
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">


      <div class="el-cliente position-relative p-5 bg-secondary  using-image "> 

        <div class="container"> 
          
          <div class="row">

             <div class="col-lg-6 p-sm-3 p-md-5 align-self-lg-start align-content-sm-end">

                <div class="section-title">
                    <p class="text-dark">Intro</p>
                    <h2>El cliente</h2>
                </div>

                <p><strong>Axionlog</strong> es una compañía proveedora de soluciones logísticas, actualmente operando en 10 países, con 18 centros de distribución, más de 15.000 puntos de entrega, 8.400 rutas recorridas y 35.000 entregas mensuales.</p>
            
            </div>     
            
            
            <div class="col-lg-6 px-5">
              
              <img class="img-fluid float-md-right portrait shadowed rounded mt--30vh" src="<?=$cdn_url?>portfolio/axionlog/1400.900/bg.1.portrait.jpg"  alt=""  loading=lazy > 
             
            </div>

          </div>

        </div><!-- End container -->

      </div><!-- End Main container -->

      
      <div class="position-relative p-5 p-5 bg-secondary el-problema "> 
      
        <div class="container"> 


          <div class="row">

            <div class="col-lg-6 px-5">

              <img class="img-fluid float-md-right portrait shadowed rounded" src="<?=$cdn_url?>portfolio/axionlog/1400.900/bg.2.portrait.jpg" alt=""  loading=lazy > 
              
            </div>


            <div class="col-lg-6 p-5 bg-secondary rounded align-self-end">

                <div class="section-title">
                    <p class="text-dark">El desafio</p>
                    <h2>El problema</h2>
                </div>

                <p>El cliente necesitaba consolidar sus canales internos y externos de comunicación con los siguientes objetivos: construir cultura organizacional, fomentar la pertenencia de los equipos, facilitar la distribución de información política y operativa dentro de la organización, favorecer el reconocimiento de marca, atraer nuevos talentos profesionales y transmitir consistentemente su misión, su visión y  su propuesta de valor hacia sus clientes.</p>
              
            </div>
          
          </div>
          
        </div><!-- End container -->

      </div>



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

              <p>Crear una estrategia que permitan la creación ágil de contenidos,  fácilmente consumibles en canales internos y externos. Intranet, Chats colaborativos, correos electrónicos  y redes sociales.</p>
              
              <p><strong>Mis responsabilidades:</strong></p>

              <ul>
                <li>Estrategia de contenidos</li>
                <li>Social Media</li>
                <li>Diseño</li>
                <li>Copywriting</li>
                <li>Analítica</li>                
              </ul>
              
              </div>
                  
            </div>

          </div><!-- End container -->

          <div class="spacer py-md-5"></div>

      </div><!-- End section -->
      
      <div class="la-estrategia position-relative overflow-hidden p-5 using-image "> 

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
                  <li>Diseño UI/UX de Intranet.</li> 
                  <li>Planificación de estrategia: contenidos, personas/audiencias, ejes temáticos.</li> 
                  <li>Curación de materiales.</li> 
                  <li>Calendarización de publicaciones.</li> 
                  <li>Composición creativa de piezas gráficas.</li> 
                  <li>Composición de videos.</li> 
                </ul>
              
              </div>     
             
              <div class="col-lg-6 align-self-lg-start">

                <ul>                
                  <li>Redacción creativa.</li>                
                  <li>Monitorización y escucha activa.</li>
                  <li>Relevamiento y evaluación de analíticas.</li>
                  <li>Evaluación y gestión de procesos.</li>
                  <li>Colaboración activa con el equipo comercial.</li>              
                </ul>
                
              </div>
                  
            </div>

          </div><!-- End container -->

          <div class="spacer py-md-5"></div>

      </div><!-- End section -->

      <div class="container">

        <div class="spacer pt-5 pb-5"></div>

        <div class="row">

          <div class="col-lg-12">
            
             <div class="owl-carousel portfolio-details-carousel">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c1_s1.jpg" class="img-fluid" alt="">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c2_s1.jpg" class="img-fluid" alt="">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c4_s1.jpg" class="img-fluid" alt="">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c3_s1.jpg" class="img-fluid" alt="">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c5_s1.jpg" class="img-fluid" alt="">
              <img src="<?=$cdn_url?>portfolio/axionlog/1400.900/posts_r1_c6_s1.jpg" class="img-fluid" alt="">
            </div>

          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>