<?php
/*
    Template Name: Home
*/

    get_header(); ?>
    <?php 

    $stylesheet_directory = get_stylesheet_directory_uri();
    $featured_project_parallax_background = get_field('featured_project_parallax_background');
    $parallax_background = get_field('parallax_background');

    ?>
    
        <!-- slider -->
        <section id="slider" class="no-padding position-relative">
            <div id="mainSlider" class="owl-carousel owl-theme dark-pagination square-pagination main-slider">
                <div class="mainSlider item owl-bg-img" style="background-image: url('<?php $first_slide = get_field('first_slide_background_image'); echo $first_slide['url'] ?>')">
                    
                        <img class="first_slide_logo" src="<?php $first_slide_logo = get_field('first_slide_logo'); echo $first_slide_logo['url'] ?>" alt="$first_slide_logo['alt']">
                    
                </div>
                <?php if ( get_field('main_slider')) : while ( has_sub_field('main_slider')) : ?>
                <div class="mainSlider item owl-bg-img lazyOwl" data-src="<?php the_sub_field('slide_image') ?>">
                    <div class="sliderText container">
                        <a href="<?php the_sub_field('link') ?>">
                            <div class="row">
                                <h1><?php the_sub_field('slide_title') ?></h1>
                                <div class="separator-line bg-yellow"></div>
                                <div class="col-sm-10 col-sm-offset-1 sliderText_subheadingContainer">
                                    <span class="sliderText_subheading"><?php the_sub_field('slide_subtitle') ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                
            </div>
            <div class="divider grey"></div>
        </section>
        <!-- end slider -->

        <!-- Logo and Description -->
        <div class="container logoSection">
            <!-- Large Logo -->
            <div class="row wow fadeIn">
                <div class="col-md-6 col-sm-10 text-center center-col">
                    <img src="<?php the_field('large_logo_image') ?>" alt="Moon Beyond Logo">
                </div>
            </div>
            <!-- Description -->
            <div class="row headingDescription wow fadeIn">
                <div class="col-sm-6 headingDescription-title">
                    <h2><img data-src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt=""><?php echo get_field('about_section_excerpt_title'); ?></h2>
                </div>
                <div class="col-sm-6 headingDescription-description">
                    <?php echo get_field('about_section_excerpt_description'); ?>
                </div>
            </div>
        </div>
       
        <!-- Parallax 1 -->
        <div class="fix-background position-relative homePageParallaxSection1 parallax wow fadeIn" data-bg='<?php echo $parallax_background; ?>'>
            <div class="container-fluid position-relative parallaxSection_boundingBox">
                <div class="row parallaxSection homePageParallax1">
                    <div class="parallaxSection_line"></div>
                    <p class="col-xs-12 text-center parallaxSectionText"><?php the_field('parallax_1_text') ?></p>
                    <div class="parallaxSection_line"></div>
                </div>
            </div>
            <div class="divider orange"></div>
        </div>
        <!-- END Parallax 1 -->
        
        <!-- Featured Projects Introduction Section -->
        <div class="wow fadeIn">
            <div class="headingSection">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <h1><img src="<?php echo $stylesheet_directory; ?>/images/label-numbers-home1.png"><?php the_field('featured_projects_title') ?></h1>
                            <h2><?php the_field('featured_projects_subtitle') ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Slider Heading END -->

        <!-- Featured Project Slider -->
        <section class="no-padding case-study bg-gray wow fadeIn featured-project-slider">
            <div class="container-fluid">
                <div class="row">
                    <div id="featuredProjectSlider" class="owl-carousel owl-theme dark-pagination">

                        <?php if ( get_field('featured_item_slider')) : $i = 1; while ( has_sub_field('featured_item_slider')) : ?>
                        <!-- slider item -->
                        <div class="item">
                            <div class="col-lg-6 col-md-6 no-padding">
                                <img class="featuredSliderImg lazyOwl" data-src="<?php the_sub_field('image') ?>" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 no-padding xs-text-center";">
                                <img class="featured-background-2 featuredSliderImg lazyOwl" data-src="<?php the_sub_field('image2') ?>" alt="">
                                <div class="case-study-content row">
                                    <div class="top-row row">
                                        <div class="col-sm-4 no-padding hidden-xs">
                                            <img class="counter-img lazyOwl" data-src="<?php the_sub_field('number_image') ?>">
                                        </div>
                                        <div class="col-sm-8 col-xs-12">
                                            <h2><?php the_sub_field('title') ?></h2>
                                            <p><?php the_sub_field('labels') ?> ...</p>
                                            <p><?php the_sub_field('description') ?></p>
                                        </div>
                                    </div>
                                    <div class="row featuredProject_linkRow">
                                        <div class="col-sm-8 col-sm-offset-4 featuredProject_link">
                                            <a href="<?php the_sub_field('link') ?>">
                                                <span class="btn btn-small highlight-button-red">View Project</span>
                                                <img class="counter-img hidden-xs" src="<?php echo $stylesheet_directory; ?>/images/rocket-link.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                        <!-- end slider item -->
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END Featured Slider -->

        <div class="container headingDescription wow fadeIn">
            <div class="col-sm-6 headingDescription-title">
                <h2><img src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt=""><?php echo get_field('featured_projects_description_title'); ?></h2>
            </div>
            <div class="col-sm-6 headingDescription-description">
                <?php echo get_field('featured_projects_description_paragraph'); ?>
            </div>
            <img src="<?php echo $stylesheet_directory; ?>/images/featured_projects_icon.png" class="trailingIcon" alt="Icon for the end of the section">
        </div>

        <!-- Featured Projects Parallax -->
        <div class="fix-background homePageParallaxSection2 parallax wow fadeIn" data-bg="<?php echo $featured_project_parallax_background; ?>">
            <div class="container-fluid position-relative parallaxSection_boundingBox">
                <div class="row parallaxSection homePageParallax2">
                    <div class="signature-lines">
                        <div class="parallaxSection_line"></div>
                        <p class="col-xs-12 text-center parallaxSectionText"><?php the_field('featured_project_description') ?></p>
                        <div class="parallaxSection_line"></div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- END Featured Projects Parallax -->
        
        <div class="dividerContainer">
            <div class="divider black"></div>
        </div>
        
        <!-- Contact Us Section -->
        <div class="wow fadeIn contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center headingSection">
                        <h1><img src="<?php echo $stylesheet_directory; ?>/images/label-numbers-home2.png"><?php the_field('contact_us_title') ?></h1>
                        <h2><?php the_field('contact_subtitle') ?></h2>
                    </div>
                </div>

                <!-- form -->
                <script>
                    var templateDir = "<?php echo get_template_directory_uri(); ?>/contact.php";
                </script>

                <!-- <div class="container"> -->
                    <div class="row contactUs__contactForm">
                        <div class="col-md-4 col-sm-6">
                            <p><?php the_field('contact_form_text') ?></p>
                            <div class="socialMediaLinks">
                                <!-- social media link -->
                                <a target="_blank" href="https://www.facebook.com/Moon-Beyond-1683370475243357"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="https://twitter.com/moonbeyond_co/"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="https://www.instagram.com/moonbeyond/"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="http://moon-beyond.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                                <!-- end social media link -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6  col-md-offset-2">
                            <form id="contactusform" action="javascript:void(0)" method="post">
                                <div id="success" class="no-margin-lr" style="display: none;"></div>
                                <input name="name" type="text" placeholder="Your Name">
                                <input name="email" type="text" placeholder="Your Email">
                                <textarea placeholder="Your Message" name="comment"></textarea>
                                <button id="contact-us-button" type="submit" class="highlight-button-dark btn btn-small button xs-margin-bottom-five">Send message</button>
                            </form>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- end form -->

                <!-- new project section -->
                <div class="row center-col text-center contactUs__nextPage">
                    <div class="col-sm-12">
                        <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                        <h5 class="wow fadeInDown"><?php the_field('next_page_blurb') ?></h5>
                        <a class="btn highlight-button-black-border margin-four no-margin-bottom wow fadeInUp" href="<?php the_field('next_page_link') ?>"><?php the_field('next_page_button_text') ?></a>
                    </div>
                </div>
                <!-- END new project section -->
            </div>

        </div>
        <!-- END Contact Form Section -->


<?php
get_footer();