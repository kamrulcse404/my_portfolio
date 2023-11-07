 <!-- Footer -->
 <div class="footer">
     <div class="footer__builder">
         <div class="container">
             <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     <div class="social-links scrolla-element-anim-1 scroll-animate" data-animate="active">

                         <a target="_blank" rel="nofollow" href="<?php global $portfolio;
                                                                    echo $portfolio['twitter_footer_url'] ?>">
                             <i aria-hidden="true" class="fab fa-twitter"></i>
                         </a>

                         <a target="_blank" rel="nofollow" href="<?php global $portfolio;
                                                                    echo $portfolio['dribbble_footer_url'] ?>">
                             <i aria-hidden="true" class="fab fa-dribbble"></i>
                         </a>

                         <a target="_blank" rel="nofollow" href="<?php global $portfolio;
                                                                    echo $portfolio['behance_footer_url'] ?>">
                             <i aria-hidden="true" class="fab fa-behance"></i>
                         </a>
                         
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     <div class="copyright-text align-center scrolla-element-anim-1 scroll-animate" data-animate="active">
                         <?php global $portfolio;
                            echo $portfolio['copy_right'] ?>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     <div class="copyright-text align-right scrolla-element-anim-1 scroll-animate" data-animate="active">
                         Developed by <strong><?php global $portfolio;
                                                echo $portfolio['author'] ?></strong>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>

 <!-- cursor -->
 <div class="cursor"></div>

 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/splitting.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jarallax.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrolla.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/skrollr.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cookie.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/typed.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
     var Tawk_API = Tawk_API || {},
         Tawk_LoadStart = new Date();
     (function() {
         var s1 = document.createElement("script"),
             s0 = document.getElementsByTagName("script")[0];
         s1.async = true;
         s1.src = 'https://embed.tawk.to/64bcb7f8cc26a871b02aa5d4/1h60it8sj';
         s1.charset = 'UTF-8';
         s1.setAttribute('crossorigin', '*');
         s0.parentNode.insertBefore(s1, s0);
     })();
 </script>

 <script>
     if ('serviceWorker' in navigator) {
         window.addEventListener('load', function() {
             navigator.serviceWorker.register('sw.js')
                 .then(function(registration) {
                     console.log('Service Worker registered with scope:', registration.scope);
                 })
                 .catch(function(error) {
                     console.error('Service Worker registration failed:', error);
                 });
         });
     }
 </script>

 <!--End of Tawk.to Script-->

 <?php wp_footer(); ?>
 </body>

 <!-- Mirrored from ahmedgamal.fun/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 13:02:09 GMT -->

 </html>