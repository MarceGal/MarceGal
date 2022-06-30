
<!-- Favicons -->
<link href="<?=$base_url?>assets/img/favicon.png" rel="icon">

<link href="<?=$base_url?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> <!-- Google Fonts -->

<?php

/*

// https://icofont.com/

<link href="<?=$base_url?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

*/

/*

<link href="<?=$base_url?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="<?=$base_url?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

<link href="<?=$base_url?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

<link href="<?=$base_url?>assets/vendor/venobox/venobox.css" rel="stylesheet">    

<link href="<?=$base_url?>assets/vendor/aos/aos.css" rel="stylesheet">    

*/

?>

<!-- Bundle CSS File -->
<link href="<?=$base_url?>assets/css/bundle-dist.css" rel="stylesheet">

<!-- Main CSS File -->
<link href="<?=$base_url?>assets/css/style.css" rel="stylesheet">

<style>

    .preloader {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-image: url('<?=$base_url?>assets/img/preloader.gif');
        background-repeat: no-repeat;
        background-color: #8a7dff;
        background-position: center;
        transition-property: left, width;
        -webkit-transition: 2s ease-in-out;
        -moz-transition: 2s ease-in-out;
        -ms-transition: 2s ease-in-out;
        -o-transition: 2s ease-in-out;
        transition: .7s cubic-bezier(0.42, 0, 0.58, 1);
    }

    .preloader.ready
    {
        background-image:none;
        left: 100%;
        width: 0%;
    }

</style>

<?php if (!$devMode){ ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-264JLWK5HT"></script>
    <script>

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-264JLWK5HT');

    </script>

<?php } ?>