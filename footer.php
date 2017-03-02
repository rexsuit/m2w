<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moon2word
 */

?>
<?php $stylesheet_directory = get_stylesheet_directory_uri(); ?>

        <!-- footer -->
        <footer>
            <div class=" bg-white footer-top">
                <div class="container">
                    <div class="row margin-four">
                        <div class="col-sm-6 text-center">
                            <div title="Code: 0xe800" class="the-icons span3">
                                <i class="icon-location"></i>
                            </div>
                            <h6 class="black-text margin-two no-margin-bottom">Toronto, Canada</h6>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div title="Code: 0xe801" class="the-icons span3">
                                <i class="icon-mail"></i>
                            </div>
                            <h6 class="margin-two no-margin-bottom">
                                <a href="mailto:info@moonbeyond.com" class="black-text">info@moonbeyond.com</a>
                            </h6>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footerMiddle">
                <div class="row footerMiddle_firstRow">
                    <div class="col-md-4"><img class="footerLogo" src="<?php echo $stylesheet_directory; ?>/images/logo_footer.png" alt=""/></div>
                    <div class="col-md-8 footerDescription">
                        <p class="footerText">
                            <span>MOON BEYOND CREATIVE  </span>
                            We are a visual design agency dedicated to taking you further
                        <img class="counter-img" src="<?php echo $stylesheet_directory; ?>/images/rocket-link.png">
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid footerBottom">
                <div class="row">
                    <div class="col-md-4 blackFooterSegment"></div>
                    <div class="col-md-1 no-padding greyFooterDiagonalShape_container">
                        <div class="col-md-12 greyFooterDiagonalShape"></div>
                    </div>
                    <div class="col-md-7 hidden-sm greyFooterSegment"></div>
                </div>
                <div class="container footerAllLinks">
                    <div class="row">
                            <!-- Footer Menu -->
                            <?php 
                                wp_nav_menu (array(
                                    'theme_location' => 'footer',
                                    'container' => 'div',
                                    'container_class' => 'col-md-7 col-md-offset-1 footerMainLinks_container',
                                    'menu_class' => 'footerMainLinks'
                                ) );
                            ?>
                            <!-- End Footer Menu -->
                        
                        <div class="col-md-4 footer-social text-left sm-text-center socialMediaLinks">
                            <!-- social media link -->
                            <a target="_blank" href="https://www.facebook.com/Moon-Beyond-1683370475243357"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/moonbeyond_co/"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/moonbeyond/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="http://moon-beyond.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                            <!-- end social media link -->
                        </div>
                        
                    </div>
                    <div class="row margin-three">
                        <!-- copyright -->
                        <div class="col-md-6 col-sm-12 copyright text-left letter-spacing-1 sm-text-center xs-margin-bottom-one">
                            &copy; <?php echo date("Y"); ?> Moon Beyond.
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>

            </div>
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->


<?php wp_footer(); ?>

<!-- javascript libraries / javascript files set #1 --> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/skrollr.min.js"></script>  
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/smooth-scroll.js"></script>
 <!-- jquery appear -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.appear.js"></script>
<!-- animation -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/wow.min.js"></script>
<!-- page scroll -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/page-scroll.js"></script> -->
<!-- easy piechart-->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.easypiechart.js"></script> -->
<!-- parallax -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.parallax-1.1.3.js"></script> -->
<!--portfolio with sorting tab --> 
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.isotope.min.js"></script>
<!-- owl slider  -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/owl.carousel.min.js"></script>
<!-- magnific popup  -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/popup-gallery.js"></script>
<!-- text effect  -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/text-effect.js"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.tools.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.revolution.js"></script> -->
<!-- counter  -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/counter.js"></script> -->
 <!-- countTo -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.countTo.js"></script> -->
<!-- fit videos  -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.fitvids.js"></script> -->
<!-- imagesloaded  -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/imagesloaded.pkgd.min.js"></script>
<!-- hamburger menu-->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/classie.js"></script> -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/hamburger-menu.js"></script>
<!-- setting --> 
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/main.js"></script>
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/jquery.stellar.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/parallax.js"></script> -->
<script type="text/javascript" src="<?php echo $stylesheet_directory; ?>/js/custom-functions.js"></script>



</body>
</html>