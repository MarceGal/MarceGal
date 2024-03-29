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

    body.Boomix::before
    {
      background-color: #35E888;
      background-image: none;
    }

    body.Boomix .cover-header::before 
    {     
      background-image: url("<?=$cdn_url?>portfolio/Boomix/1400.900/0.jpg");
      mix-blend-mode: luminosity;
      opacity: 0.5;
    }

    body.Boomix .portfolio-details 
    {
      /*background-color: #fff;  
      background-color:rgba(255, 255, 255, 1);*/
    }

    body.Boomix .portfolio-details .img-fluid {
      width: 100%;
    }

  </style>

</head>

<body class="project Boomix">
  
  
  
  <main id="main">


    <!-- ======= Header ======= -->
  <header  class="cover-header">

    <div class="container">

        <a href="#header" class="">
            <img src="<?=$base_url?>assets/img/favicon.png" alt="" class="logo img-fluid">
        </a>

        <h1>Lorem Op</h1>
        <h2>Soy <span class="featured-text">texto destacado</span> y loremp ipsum drogen</h2>  
        <?=getSvgIcon ("scrollDownIcon");?>   

    </div>
    
    

    </header>

    <!-- End Header -->
  
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">

      <div class="container">

        <div class="spacer pt-5 pb-5"></div>

        <div class="row">

          <div class="col-lg-12">
            
            <img src="<?=$cdn_url?>portfolio/Boomix/1400.900/0.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Boomix/1400.900/1.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Boomix/1400.900/2.jpg" class="img-fluid" alt="">
            
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>