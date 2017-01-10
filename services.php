<?php
/*
	Template Name: Services
*/

    get_header(); ?>
    <?php $stylesheet_directory = get_stylesheet_directory_uri();  ?>

    <!-- head section -->
    <section class="page-title parallax-fix parallax13 page-title-large">
        <img class="parallax-background-img" src="<?php the_field('background_image') ?>" alt="" />
        <div class="titleContainer">
            <div class="text-center animated fadeInUp">
                <!-- page title --> 
                <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                <!-- end page title -->
            </div>
        </div>
    </section>
    <!-- end head section -->

    <!-- Texture and symbol -->
    <div class="no-margin-top content-section">
        <div class="extra-texture">
            <img src="<?php echo $stylesheet_directory; ?>/images/extra_white_texture.png">
            <img class="symbol" src="<?php the_field( 'symbol' ) ?>">
        </div>
    </div>
    <!-- End Texture and symbol -->

    <!-- Learn More -->
    <div class="dividerHolder">
        <div class="container">
            <div class="row">
                <div class="col-12-sm text-center features-2 heading headingDescription animated fadeInUp">
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <div class="col-sm-5 headingDescription-title animated fadeInUp">
                        <h2><img src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt=""><?php echo get_field('first_heading'); ?></h2>
                    </div>
                    <div class="col-sm-7 headingDescription-description animated fadeInDown">
                        <?php echo get_field('first_heading_description'); ?>
                    </div>
                </div>
            </div>
            <div class="offers threeStrengths text-center ">
                <div class="row">

                    <?php if ( get_field('three_skills')) : while ( has_sub_field('three_skills')) : ?>
                        <!-- features item -->
                        <div class="col-sm-4 text-center features-2">
                            <div class="key-person wow fadeInUp">
                                <div class="key-person-img"><img src="<?php the_sub_field('skill_image') ?>" alt=""></div>
                                <div class="key-person-details-wrapper">
                                    <div class="key-person-details no-border">
                                        <h5><?php the_sub_field('skill_name') ?></h5>
                                        <div class="separator-line bg-black"></div>
                                        <p><?php the_sub_field('skill_desc') ?></p>
                                    </div>
                                </div>
                                <div class="fadeOutGrad"></div>
                            </div>
                        </div>
                        <!-- end features item -->
                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
        <div class="divider grey"></div>
    </div>
    <!-- End Learn More -->

    <!-- Split Background -->
    <div class="split-background split-background-top" style="background-image: url('<?php the_field('split_background_top') ?>')">
        <div class="headingLargeElement headingSection">
            <h1>
                <img src="<?php echo $stylesheet_directory; ?>/images/main_services_graphic1.png">
                <?php the_field('split_background_heading'); ?>
            </h1>
            <h2>
                <?php the_field('split_background_subheading'); ?>
            </h2>
        </div>
    </div>
    <!-- end split background-->

    <!-- Main Services-->
    <div class="container-fluid position-relative">
        <ul class="row service-items">

            <!-- service items -->
            <?php $portfolio_page_link = get_field('portfolio_page_link') ?>
            <?php if ( get_field('services')) : while ( has_sub_field('services')) : ?>
                <div class="service-item">
                    <li>
                        <img src="<?php the_sub_field('image') ?>" alt="">
                    </li>
                    <li class="content <?php $tag = get_sub_field('tag_filter'); echo $tag ?>">
                        <h3><?php the_sub_field('name') ?></h3>
                        <p><?php the_sub_field('description') ?></p>
                        <a href="<?php echo get_page_link(81); ?>/#<?php echo $tag ?>" >EXAMPLES</a>
                    </li>
                    <br style="clear: both;" />
                </div>
            <?php endwhile; endif; ?>
            <!-- END service items -->

            
        </ul>
    </div>
    <!-- END Main Services-->

    <!-- Main Services Description Section -->
    <div class="container headingDescription">
        <div class="col-sm-6 headingDescription-title">
            <h2><img src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt=""><?php echo get_field('main_services_description_section_heading'); ?></h2>
        </div>
        <div class="col-sm-6 headingDescription-description">
            <p><?php echo get_field('main_services_description_section_text'); ?></p>
        </div>
        <div class="col-xs-12">
            <img class="trailingIcon" src="<?php echo $stylesheet_directory; ?>/images/main_services_icon1.jpg">
        </div>
    </div>
    <!-- END Main Services Description Section -->

    <!-- Parallax -->
    <section class="fix-background parallax servicesPageParallaxSection" style="background-image:url('<?php the_field('parallax_section_image') ?>');">
        <div class="container-fluid position-relative parallaxSection_boundingBox">
            <div class="row parallaxSection servicesPageParallax">
                <div class="signature-lines">
                    <p class="col-xs-12 text-center parallaxSectionText"><?php the_field('parallax_section_text') ?></p>
                </div>
            </div>
        </div>
        <div class="divider black"></div>
    </section>
    <!-- END Parallax -->

    <!-- All Services -->
    <div class="allServices">
        <div class="container">
             <div class="row headingSection">
                <div class="col-xs-12 text-center">
                    <h1><img src="<?php echo $stylesheet_directory; ?>/images/main_services_graphic2.jpg"><?php the_field('all_services_heading') ?></h1>
                    <h2 class="col-xs-12"><?php the_field('all_services_subheading') ?></h2>
                </div>
            </div>
            <div class="allServices__items">
                <?php $i = 0 ?>
                <?php while ( have_rows('all_services')) : the_row();?>
                <?php if ( $i % 3 === 0 ) { ?>
                <div class="row">
                <?php } ?>
                    <div class="col-sm-4 allSkills">                    
                        <div class="img-box">
                            <div class="heading-container">
                                <img src="<?php the_sub_field('skill_image') ?>" alt="">
                                <div class="skillNameWrap">
                                    <h2><?php the_sub_field('skill_name') ?></h2>
                                </div>
                            </div>
                            <div class="separator-line bg-white"></div>
                        </div>
                        <p><?php the_sub_field('skill_description') ?></p>
                    </div>
                <?php $i++; ?>
                <?php if ( $i % 3 === 0 ) {?>
                </div>
                <?php } ?>
                <?php endwhile; ?>
            </div>
            
            <div class="row">
                <div class="col-sm-6 headingDescription-title">
                    <h2><img src="<?php echo $stylesheet_directory; ?>/images/white_symbol.png" class="headingDescription-titleSymbol" alt=""><?php echo get_field('all_services_description_heading'); ?></h2>
                </div>
                <div class="col-sm-6 headingDescription-description">
                    <?php echo get_field('all_services_description_paragraph'); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <img class="trailingIcon" src="<?php echo $stylesheet_directory; ?>/images/all_services_icon.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- end all service-->

    <!-- Split Background -->
    <div class="split-background split-background-bottom" style="background-image: url('<?php the_field('split_background_top') ?>')">
        <section class="new-project no-padding-top ">
            <div class="container">
                <div class="row center-col text-center wow fadeInUp">
                    <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                    <h5 class="wow fadeInDown"><?php the_field('next_page_blurb') ?></h5>
                    <a class="btn highlight-button-white-border margin-four no-margin-bottom wow fadeInUp" href="<?php the_field('next_page_link') ?>"><?php the_field('next_page_button_text') ?></a>
                </div>
            </div>
        </section>
        <!-- end new project -->
    </div>
    <!-- End Split Background-->


    <?php
    get_footer();