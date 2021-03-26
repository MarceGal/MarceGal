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
    body.pixowl .cover-header
    {

      background: -moz-linear-gradient(top, rgba(196,169,0,0.3) 0%, rgba(196,169,0,1) 100% ); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(196,169,0,0.3) 0%, rgba(196,169,0,1) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(196,169,0,0.3) 0%, rgba(211,169,0,1) 100%) /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
    }


    body.pixowl .cover-header .row-bg-wrap::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/Pixowl/1400.900/0.jpg");    
    }
    
    body.pixowl .portfolio-details .img-fluid { width: 100%; }

    body.pixowl .el-cliente,
    body.pixowl .el-cliente .container .row
    {      
      height: 100vh;
    }

    body.pixowl .el-cliente::before 
    {      
      background-image: url("<?=$cdn_url?>portfolio/Pixowl/1400.900/bg.2.jpg");
    }

    
    @media (max-width: 992px) {
       
      body.pixowl .el-cliente,
      body.pixowl .el-cliente .container .row
      {      
        height: auto;
      }


    }


  </style>

</head>

<body class="project pixowl">

  
  <div class="preloader"></div>
  
  
  <main id="main">


    <!-- ======= Header ======= -->
    <header  class="cover-header">

      <div class="row-bg-wrap"></div>

      <div class="container">

          <a href="#header" class="">
            <img src="<?=$cdn_url?>portfolio/Pixowl/logo.svg" alt="" class="logo img-fluid">
          </a>

          <p class="font-weight-bold m-0">Mobile Games Studio</p>
          <h1>Content platform with  <span class="featured-text">character-driven narratives</span></h1>  
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
              
              <p><strong>Pixowl Inc.</strong> is a mobile game development company founded in 2011 and headquartered in San Francisco. They joins innovators, developers and artists to build virtual worlds featuring both original and IP-based content.</p>
            
            </div>
                
          </div>

        </div><!-- End container -->

      </div><!-- End Main container -->

      
      <div class="el-problema position-relative p-5"> 
      
        <div class="container"> 


          <div class="row">

            <div class="col-lg-6 px-5">

              <img src="<?=$cdn_url?>portfolio/pixowl/cover.jpg" class="img-fluid float-md-right portrait shadowed rounded mt--50vh" alt=""  loading=lazy>
              
            </div>


            <div class="col-lg-6 p-5 bg-secondary rounded align-self-end">

                <div class="section-title">
                    <p class="text-dark">El desafio</p>
                    <h2>El problema</h2>
                </div>

                <p>Construir una plataforma de contenidos que permita ganar reputación ante inversores, medios especializados y usuarios curiosos. De este modo  el cliente podía acompañar todas sus estrategias comerciales en los canales digitales y tradicionales.</p>
              
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

              <p>Analizar la estrategia y diseñar <span class="featured-text">una solución especifica para la publicación de contenidos</span>. Implementé una plataforma multilenguaje y personalizada para contar la historia de los diferentes productos de la compañía. </p>
              
              <p>Mis responsabilidades</p>

              <ul>
                <li>UI/UX</li>
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
            
            <img src="<?=$cdn_url?>portfolio/Pixowl/1400.900/1.jpg" class="img-fluid md-shadowed md-rounded" alt="">
            
            <div class="spacer py-md-5"></div>
            
            <img src="<?=$cdn_url?>portfolio/Pixowl/1400.900/2.jpg" class="img-fluid md-shadowed md-rounded" alt="">
            
            <div class="spacer py-md-5"></div>
            
            <img src="<?=$cdn_url?>portfolio/Pixowl/1400.900/3.jpg" class="img-fluid md-shadowed md-rounded" alt="">
            
            <div class="spacer py-md-5"></div>
            
            <img src="<?=$cdn_url?>portfolio/Pixowl/1400.900/4.jpg" class="img-fluid md-shadowed md-rounded" alt="">
            
            <div class="spacer py-md-5"></div>
            
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>