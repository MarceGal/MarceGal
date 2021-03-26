 
    <!-- 
    <div class="credits">
        Codiado con mucho <i class="ri-heart-2-line" style="red"></i>
    </div>
    -->
    

    <?php 


    if($devMode){

        // Jquery
        
        echo '<script src="'.$base_url.'assets/vendor/jquery/jquery.min.js"></script>';       

        //echo '<script src="'.$base_url.'assets/vendor/jquery/jquery.min.js"></script>';         
   
        // echo '<script src="'.$base_url.'assets/vendor/jquery.easing/jquery.easing.min.js"></script>'; 
        
        // echo '<script src="'.$base_url.'assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>';  

        echo '<script src="'.$base_url.'assets/vendor/php-email-form/validate.js"></script>';

        echo '<script src="'.$base_url.'assets/vendor/waypoints/jquery.waypoints.min.js"></script>';
    
        // Carrousels

        echo '<script src="'.$base_url.'assets/vendor/owl.carousel/owl.carousel.min.js"></script>';
        
        // layout
        
        echo '<script src="'.$base_url.'assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>';        

         // Modal
    
        echo '<script src="'.$base_url.'assets/vendor/venobox/venobox.min.js"></script>';

        //echo '<script src="'.$base_url.'assets/vendor/counterup/counterup.min.js"></script>';

        //Lazy load

        //echo '<script src="'.$base_url.'assets/vendor/jquery.lazy/jquery.lazy.min.js"></script>';

        //echo '<script src="'.$base_url.'assets/vendor/jquery.lazy/jquery.lazy.plugins.min.js"></script>';

        //Gsap

        echo '<script src="'.$base_url.'assets/vendor/gsap/gsap.min.js"></script>';

         // Main JS File
         
         echo '<script src="'.$base_url.'assets/js/main.js"></script>'; 
    
    }else{

        echo '<script src="'.$base_url.'assets/js/bundle-dist.js"></script>';       
        echo '<script src="'.$base_url.'assets/js/main-dist.js"></script>'; 
    
    }


    ?>    

</body>

</html>