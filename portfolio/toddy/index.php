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

    body.pixowl::before{
    }

    body.pixowl .cover-header::before 
    {     
      background-image: url("<?=$cdn_url?>2008 - Molinos - Toddy/1.jpg");  
    }

    body.pixowl .portfolio-details {
      background-color: #fff;  
      background-color:rgba(255, 255, 255, 0.9);
    }

  </style>

</head>

<body class="project pixowl">
  
  
  
  <main id="main">


    <!-- ======= Header ======= -->
  <header  class="cover-header">

    <div class="container">

        <a href="#header" class="">
            <img src="<?=$base_url?>assets/img/favicon.png" alt="" class="logo img-fluid ">
        </a>

        <h1><a href="#header">Lorem Op</a></h1>
        <h2>Soy <span class="featured-text">texto destacado</span> y loremp ipsum drogen</h2>     
        <i class="icofont-scroll-long-down"></i>

       
    </div>
    
    

    </header>

    <!-- End Header -->
  
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

          
            <img src="<?=$cdn_url?>2008 - Molinos - Toddy/1.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>2008 - Molinos - Toddy/2.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>2008 - Molinos - Toddy/3.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>2008 - Molinos - Toddy/4.jpg" class="img-fluid" alt="">
            <img src="<?=$cdn_url?>2008 - Molinos - Toddy/5.jpg" class="img-fluid" alt="">

          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

<?php include '../../inc/footer.php' ?>