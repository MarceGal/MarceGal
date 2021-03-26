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
    
    
    body.aysa .cover-header .row-bg-wrap  {  mix-blend-mode: luminosity; } 

    body.aysa .cover-header .row-bg-wrap::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/aysa/1400.900/bg.1.jpg");    
      opacity: 0.1;
    }
    
    body.aysa .portfolio-details .img-fluid {  width: 100%;  }

    body.aysa .el-cliente::before 
    {      
      /*background-image: url("<?=$cdn_url?>portfolio/aysa/1400.900/bg.2.jpg"); */
    } 

    body.aysa .la-solucion,
    body.aysa .la-solucion .container .row
    {      
      height: 100vh;
    }


    body.aysa .la-solucion::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/aysa/1400.900/bg.2.jpg"); /**/
    }


    @media (max-width: 992px) 
    {
       
        body.aysa .la-solucion,
        body.aysa .la-solucion .container .row
        {      
          height: auto;
        }

 
     }


  </style>

</head>

<body class="project aysa bg-primary">
  
  <div class="preloader"></div>
  
  
  <main id="main">


    <!-- ======= Header ======= -->
  <header  class="cover-header text-white">

    <div class="row-bg-wrap"></div>

    <div class="container">

        <a href="#header" class="">
            <img src="<?=$cdn_url?>portfolio/aysa/logo.svg" alt="" class="logo iso img-fluid">
        </a>

        <p class="font-weight-bold mb-1">Panel de control de Estado de Situación</p>
        <h2>En el <span class="featured-text">lugar correcto</span>, en el momento adecuado</h2>  
        <?=getSvgIcon ("scrollDownIcon");?>   
 
    </div>
    
    

    </header>

    <!-- End Header -->
  
    <!-- ======= Portfolio Details ======= -->

    <div id="portfolio-details" class="portfolio-details">    

      <div class="position-relative overflow-hidden p-5 bg-primary el-cliente using-image blend-luminosity"> 

          <div class="spacer py-md-5"></div>

          <div class="container"> 
            
            <div class="row">

              <div class="col-lg-5 p-sm-3 p-md-5">

                  <div class="section-title">
                      <p class="text-dark">Intro</p>
                      <h2>El cliente</h2>
                  </div>

                  <p>Agua y Saneamientos Argentinos S.A. (AySA) es la empresa concesionaria de los servicios públicos de agua potable y recolección de desagües cloacales para la Ciudad de Buenos Aires y gran parte del conurbano bonaerense.</p>
                
              </div>     
              
              <div class="col-lg-1"></div>
              
              <div class="col-lg-6">
                
                <img src="<?=$cdn_url?>portfolio/aysa/1400.900/bg.2.portrait.jpg" class="img-fluid portrait shadowed rounded" alt=""  loading=lazy>
              
              </div>
                  
            </div>


          </div><!-- End container -->
          
          <div class="spacer py-md-5"></div>

      </div><!-- End Main container -->        
      
      <div class="position-relative overflow-hidden"> 
      
        <div class="container p-3 p-md-5"> 

          <div class="spacer py-md-5"></div>

          <div class="row">

            <div class="col-lg-6">

              <img src="<?=$cdn_url?>portfolio/aysa/1400.900/bg.1.portrait.jpg" class="img-fluid float-md-right portrait shadowed rounded" alt=""  loading=lazy>
              
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-5 p-sm-3 p-md-5">

                <div class="section-title">
                    <p class="text-dark">El desafio</p>
                    <h2>El problema</h2>
                </div>

                <p>Las cuadrillas operativas y la dirección de la compañía cuentan con varios sistemas geográficos para la gestión de las redes de agua y cloaca en toda la concesión de la empresa dentro del radio de la Ciudad de Buenos Aires y 24 partidos del conurbano bonaerense. Desde reclamos, cortes de servicio, valores de presión, entre muchas otras variables.</P>
                <p class="strong">Bajo este escenario, realizar consultas diarias representaba un cuello de botella en términos de tiempos de toma de decisiones.</p>
              
            </div>
          
          </div>
          
          <div class="spacer py-md-5"></div>

        </div><!-- End container -->

      </div>

      <div class="position-relative overflow-hidden p-5 bg-primary la-solucion using-image blend-luminosity"> 

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

              <p>Crear una aplicación que integre las diferentes fuentes de datos y permita visualizar, consultar y comparar  información crítica, divididas en capas, dentro de un solo mapa.</p>
              
              <p>Mis responsabilidades</p>

              <ul>
                <li>UI/UX</li>
              </ul>
              
              </div>
                  
            </div>

            <div class="spacer py-md-5"></div>

          </div><!-- End container -->

      </div><!-- End section -->

      <div class="container"> 

        <div class="spacer py-md-5"></div>

        <div class="row">

          <div class="col-lg-12">
            
            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/0.jpg" class="img-fluid md-shadowed md-rounded" alt="">

            <div class="spacer py-5"></div>

            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/1.jpg" class="img-fluid md-shadowed md-rounded" alt="">

            <div class="spacer py-5"></div>

            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/2.jpg" class="img-fluid md-shadowed md-rounded" alt="">

            <div class="spacer py-5"></div>

            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/iconos.1.png" class="img-fluid " alt="">

            <div class="spacer py-5"></div>
          
            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/iconos.2.png" class="img-fluid " alt="">

            <div class="spacer py-5"></div>

            <img src="<?=$cdn_url?>portfolio/aysa/1400.900/tipografia.gif" class="img-fluid md-shadowed md-rounded" alt="">
            
          </div>

        </div>

      </div><!-- End container -->
	  
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>