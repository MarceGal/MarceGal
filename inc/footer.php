 
    <!-- 
    <div class="credits">
        Codiado con mucho <i class="ri-heart-2-line" style="red"></i>
    </div>
    -->
    

    <?php 

   
    // echo '<script src="'.$base_url.'assets/vendor/jquery.easing/jquery.easing.min.js"></script>';  // (Sin uso) 
    // echo '<script src="'.$base_url.'assets/vendor/counterup/counterup.min.js"></script>'; / (Sin uso)
    // echo '<script src="'.$base_url.'assets/vendor/jquery.lazy/jquery.lazy.min.js"></script>'; // (Sin uso)
    
    // echo '<script src="'.$base_url.'assets/vendor/jquery/jquery.min.js"></script>';      
    // echo '<script src="'.$base_url.'assets/vendor/waypoints/jquery.waypoints.min.js"></script>';
    // echo '<script src="'.$base_url.'assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>'; 
    //echo '<script src="'.$base_url.'assets/vendor/owl.carousel/owl.carousel.min.js"></script>';
    //echo '<script src="'.$base_url.'assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>';  
    //echo '<script src="'.$base_url.'assets/vendor/jquery.lazy/jquery.lazy.plugins.min.js"></script>';
    //echo '<script src="'.$base_url.'assets/vendor/gsap/gsap.min.js"></script>';
    //echo '<script src="'.$base_url.'assets/vendor/aos/aos.js"></script>'; 
    //echo '<script src="'.$base_url.'assets/vendor/venobox/venobox.min.js"></script>';

    echo '<script src="'.$base_url.'assets/js/bundle-dist.js"></script>';  
    
    // Main JS File
    
    echo '<script src="'.$base_url.'assets/js/main.js"></script>'; 
    echo '<script src="'.$base_url.'assets/js/sw.js"></script>'; 

    if($contactFormEnabled) {
                
        echo '<script src="'.$base_url.'assets/vendor/php-email-form/validate.js"></script>';

    }

    ?>    

</body>

</html>