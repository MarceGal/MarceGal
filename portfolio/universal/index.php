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

    body.Universal-Music::before
    {
      background-color: #35E888;
      background-image: none;
    }

    body.Universal-Music .cover-header::before 
    {     
      background-image: url("<?=$cdn_url?>portfolio/Universal-Music/1400.900/0.jpg");
      mix-blend-mode: luminosity;
      opacity: 0.5;
    }

    body.Universal-Music .portfolio-details 
    {
      /*background-color: #fff;  
      background-color:rgba(255, 255, 255, 1);*/
    }

    body.Universal-Music .portfolio-details .img-fluid {
      width: 100%;
    }

  </style>

</head>

<body class="project Universal-Music">
  
  
  
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
            
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/0.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/1.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/2.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/3.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/4.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/5.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>portfolio/Universal-Music/1400.900/6.jpg" class="img-fluid" alt="">
            
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>