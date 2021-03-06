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

    body.swancustombasses .cover-header
    {
      background: -moz-linear-gradient(top, rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(0,0,0,.3) 60%,rgba(0,0,0,.7) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
    }

    body.swancustombasses .cover-header .row-bg-wrap  {  /*mix-blend-mode: luminosity;*/ } 

    body.swancustombasses .cover-header .row-bg-wrap::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.jpg");    
      background-position: bottom center;
    }
    
    body.swancustombasses .portfolio-details .img-fluid { width: 100%; }

    body.swancustombasses .el-cliente,
    body.swancustombasses .el-cliente .container .row
    {      
      height: 100vh;
    }

    body.swancustombasses .el-cliente::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.jpg");    
    }

    
    @media (max-width: 992px) {
       
      body.swancustombasses .el-cliente,
      body.swancustombasses .el-cliente .container .row
      {      
        height: auto;
      }


    }


  </style>

</head>

<body class="project swancustombasses">

  
  <div class="preloader"></div>
  
  
  <main id="main">


    <!-- ======= Header ======= -->
    <header  class="cover-header text-white">

      <div class="row-bg-wrap"></div>

      <div class="container">

          <a href="#header" class="">
            <img src="<?=$cdn_url?>portfolio/swancustombasses/logo.svg" alt="" class="logo img-fluid">
          </a>

          <p class="font-weight-bold m-0">American FoodService</p>
          <h1><span class="featured-text">Abastecimiento en toda LATAM</span>, desde un solo lugar</h1>  
          <?=getSvgIcon ("scrollDownIcon");?>   

      </div>

    </header>

    <!-- End Header -->
  
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">

      <div class="el-cliente position-relative p-5 bg-secondary  using-image blend-luminosity"> 

        <div class="container"> 
          
          <div class="row">

            <div class="col-lg-6 p-sm-3 p-md-5 align-self-lg-start align-content-sm-end">

                <div class="section-title">
                    <p class="text-dark">Intro</p>
                    <h2>El cliente</h2>
                </div>

                <p>En la ciudad de Buenos Aires, m??s precisamente en el barrio porte??o de La Paternal, se encuentra una peque??a f??brica boutique de instrumentos el??ctricos de cuerdas. <strong>Swan Custom Basses</strong>, una PyME pujante en pleno desarrollo y proyecci??n en varios mercados internacionales.</p>
            
              
            </div>     
            
            
            <div class="col-lg-6 px-5">
              
              <img class="img-fluid float-md-right portrait shadowed rounded " src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.1.portrait.jpg"  alt=""  loading=lazy > 
           
            </div>
                
          </div>

        </div><!-- End container -->

      </div><!-- End Main container -->

      
      <div class="position-relative p-5 p-5 bg-secondary el-problema "> 
      
        <div class="container"> 


          <div class="row">

            <div class="col-lg-6 px-5">

              <img class="img-fluid float-md-right portrait shadowed rounded mt--10vh" src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/bg.2.portrait.jpg" alt=""  loading=lazy > 
              
            </div>

            <div class="col-lg-6 p-5 bg-secondary rounded align-self-end">

                <div class="section-title">
                    <p class="text-dark">El desafio</p>
                    <h2>El problema</h2>
                </div>

                <p>Canalizar consultar comerciales y t??cnicas, e implementar un cat??logo on line con todas las especificaciones de productos.</p>
              
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
                      <h2>La soluci??n</h2>
                  </div>

              </div>     
              
              <div class="col-lg-1"></div>
              
              <div class="col-lg-6 align-self-lg-center align-content-sm-start">

              <p>Implement?? un sitio web comercial que pueda transmitir los valores de la marca y ense??ar a los usuario las caracter??sticas y detalles de los productos.</p>
              
              <p><strong>Mis responsabilidades:</strong></p>

              <ul>
                <li>UX</li>
                <li>Dise??o</li>
                <li>Implementaci??n t??cnica</li>
                <li>Anal??tica</li>                
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
                    <h2>El plan de acci??n</h2>
                </div>

              </div>     

              <div class="col-lg-6 align-self-lg-center align-content-sm-start"> </div>


              <div class="col-lg-6 align-self-lg-start">

              <ul>
                  <li>Definici??n de canales. Integraci??n entre ellos. Percepci??n de la marca.</li> 
                  <li>Segmentos y arquetipos. </li> 
                  <li>FODA de la organizaci??n, productos/servicios, mercado. </li> 
                  <li>Benchmark de la competencia.</li> 
                  <li>Definici??n y revisi??n de referentes.</li> 
                  <li>Definici??n de Kpis a trabajar. </li> 
                  <li>Definici??n de ejes tem??ticos.</li> 
                  <li>Definici??n de l??nea editorial.</li> 
                  <li>Desarrollo progresivo de sistema gr??fico.</li> 
                </ul>
              
              </div>     
             
              <div class="col-lg-6 align-self-lg-start">

                <ul>                
                  <li>Composici??n visual de contenidos. Imagen, audio y video.</li> 
                  <li>Redacci??n.</li> 
                  <li>Curaci??n de anuncios de la organizaci??n.</li> 
                  <li>Planificaci??n, calendarizaci??n y seguimiento de contenidos.</li> 
                  <li>Elaboraci??n de preguntas y respuestas frecuentes.</li> 
                  <li>Recolecci??n y consideraci??n de datos.</li> 
                  <li>Elaboraci??n de informes.</li>              
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

              <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/post.1.png" class="img-fluid lazy"  loading=lazy>
              <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/post.2.png" class="img-fluid lazy"  loading=lazy>
              <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/post.3.png" class="img-fluid lazy"  loading=lazy>
              <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/post.4.png" class="img-fluid lazy"  loading=lazy>
              <img src="<?=$cdn_url?>portfolio/swancustombasses/1400.900/post.5.png" class="img-fluid lazy"  loading=lazy>     

            </div>

          </div>

        </div>
        
        <div class="spacer py-md-5"></div>  

      </div><!-- End section -->

      
      <div class=" bg-secondary position-relative overflow-hidden p-5 using-image "> 

          <div class="spacer py-md-5"></div>  

          <div class="container"> 
            
            <div class="row">
            
              <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                <div class="section-title">
                    <p class="text-dark">Work in progress</p>
                    <h2>Mi misi??n actual</h2>
                </div>

              </div>     

              <div class="col-lg-6 align-self-lg-center align-content-sm-start">

                <p>Mi misi??n en American Food Service es seguir acompa??ando su estrategia de contenidos, dar soporte a los equipos comerciales y nutrir su comunicaci??n visual, desde lo estrat??gico hasta lo creativo.</p>
              
              </div>
             
                  
            </div>

          </div><!-- End container -->

          <div class="spacer py-md-5"></div>

      </div><!-- End section -->


    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>