<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moon2word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php $stylesheet_directory = get_stylesheet_directory_uri(); ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Moon Beyond - Taking you further">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Moon Beyond">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <!-- for google search console verification. helps with telling google to re-index. Only stays verified as long as this meta tag is still here -->
    <meta name="google-site-verification" content="WLLq2tLVe3CxdZxDv8JyO3aPj3t1teO0HDL1ceTZ1v8" />
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $stylesheet_directory; ?>/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo $stylesheet_directory; ?>/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $stylesheet_directory; ?>/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo $stylesheet_directory; ?>/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $stylesheet_directory; ?>/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="<?php echo $stylesheet_directory; ?>/favicons/safari-pinned-tab.svg" color="#ef4b2f">
    <!-- animation --> 
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/animate.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- bootstrap --> 
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/bootstrap.css" /> -->
    <!-- et line icon --> 
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/et-line-icons.css" /> -->
<!--     <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/fontello.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/fontello-codes.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/fontello-embedded.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/fontello-ie7.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/fontello-ie7-codes.css" /> -->
    <!-- revolution slider -->
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/extralayers.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/settings.css" /> -->
    <!-- magnific popup -->
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/magnific-popup.css" /> -->
    <!-- owl carousel -->
<!--     <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/owl.transitions.css" />
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/full-slider.css" /> -->
    <!-- text animation -->
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/text-effect.css" /> -->
    <!-- hamburger menu  -->
    <!-- <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/menu-hamburger.css" /> -->
    <?php wp_head(); ?>
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/responsive.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- custom -->
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/custom.css" />


    <style type="text/css" media="screen, print">
        @font-face {
          font-family: "OCR-A-STD-Regular";
          src: url("<?php echo $stylesheet_directory; ?>/fonts/ocr-a-regular.ttf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced";
          src: url("<?php echo $stylesheet_directory; ?>/fonts/ProximaNovaCond-Regular.otf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced Light";
          src: url("<?php echo $stylesheet_directory; ?>/fonts/ProximaNovaCond-Light.otf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced Semibold";
          src: url("<?php echo $stylesheet_directory; ?>/fonts/ProximaNovaCond-Semibold.otf");
      }
  }
</style>

<!--[if IE]>
    <link rel="stylesheet" href="<?php echo $stylesheet_directory; ?>/css/style-ie.css" />
    <![endif]-->
<!--[if IE]>
    <script src="<?php echo $stylesheet_directory; ?>/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
  <!-- navigation panel -->
  <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-dark-transparent" role="navigation">
      <div class="container">
          <div class="row">
              <!-- logo -->
              <div class="col-md-2 navbar-header pull-left" style="clear: left;">
                  <a href="<?php echo site_url() ?>" class="navbar-brand"><img alt="Moon Beyond Creative Co - Visual Design Agency" src="<?php echo $stylesheet_directory; ?>/images/logo-nav.png" class="logo"/></a>                    
              </div>                    
              <!-- end logo -->
              <!-- toggle navigation -->
              <div class="navbar-header col-sm-4 col-xs-2 pull-right">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <!-- toggle navigation end -->
              <!-- main menu -->
              <div class="col-md-8 no-padding-right accordion-menu text-right">
                  <?php 
                  wp_nav_menu (array(

                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_class' => 'navbar-collapse collapse',
                    'menu_id' => 'accordion',
                    'menu_class' => 'nav navbar-nav navbar-right panel-group'

                    ) );
                    ?>
              </div>
              <!-- end main menu -->
          </div>
      </div>
  </nav>
  <!--end navigation panel -->