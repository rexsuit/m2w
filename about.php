<?php
/*
    Template Name: About
*/

    get_header(); ?>
    <?php $stylesheet_directory = get_stylesheet_directory_uri();  ?>

    <!-- head section -->
    <section class="page-title parallax13 parallax-fix page-title-large">
        <img class="parallax-background-img" src="<?php $background_image = get_field('background_image'); echo $background_image['url']; ?>" alt="" />
        <div class="titleContainer">
            <div class="animated fadeInUp">
                <!-- page title (large screen) --> 
                <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                <!-- end page title (large screen) -->
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

    <div class="dividerHolder">
        <div class="container">
            <div class="row aboutHeadingSection">
                <div class="col-sm-12 text-center heading">
                    <!-- Page Title (small screen) -->
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <!-- END Page Title (small screen) -->
                    <h2 class="headingSubtitle"><?php echo get_field('subtitle'); ?></h2>
                    <div class="headingDescription">
                        <div class="col-sm-5 headingDescription-title">
                            <h2><img src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt=""><?php the_field('first_heading') ?></h2>
                        </div>
                        <div class="col-sm-7 headingDescription-description">
                            <p><?php the_field('section_1_text') ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- three strenths -->
            <div class="offers threeStrengths text-center position-relative">
                <div class="row">
                    <?php if ( get_field('three_strengths')) : while ( has_sub_field('three_strengths')) : ?>                            
                        <div class="col-md-4 col-sm-4 text-center wow fadeIn features-2" data-wow-duration="300ms">
                            <div class="key-person">
                                <div class="key-person-img"><img src="<?php the_sub_field('strength_image') ?>" alt=""></div>
                                <div class="key-person-details-wrapper">
                                    <div class="key-person-details no-border">
                                        <h5><?php the_sub_field('strength_name') ?></h5>
                                        <div class="separator-line bg-black"></div>
                                        <p><?php the_sub_field('strength_description') ?></p>
                                    </div>
                                </div>
                                <div class="fadeOutGrad"></div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>                
                </div>
                
            </div>
            <!-- end three strengths -->
            <div class="divider orange"></div>
        </div><!-- end container -->
    </div>
        
        
<!-- END First Section -->   
<!-- Crew Section -->

    <!-- Split Background - Top -->
    <div class="split-background split-background-top" data-bg='<?php the_field('split_image_top') ?>'>
    
        <div class="headingLargeElement headingSection">
            <h1>
                <img src="<?php echo $stylesheet_directory; ?>/images/label-numbers-about01.png">
                <?php the_field('crew_heading') ?>
            </h1>
            <h2>
                <?php the_field('crew_subheading') ?>
            </h2>
        </div>
    </div>
    <!-- END Split Background - Top -->

    <section class="crewSection sectionLargeHeading">
        <div class="container text-center">
            
            <div class="row offers text-center">
                <?php if ( get_field('crew')) : while ( has_sub_field('crew')) : ?>                            
                    <div class="col-md-3 col-sm-3 text-center wow fadeIn features-2" data-wow-duration="300ms">
                        <div class="key-person">
                            <div class="key-person-img">
                                <img src="<?php the_sub_field('member_image') ?>" alt="">
                            </div>
                            <h5><?php the_sub_field('member_name') ?></h5>
                            <div class="separator-line bg-yellow"></div>
                            <p><?php the_sub_field('member_description') ?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>                
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p><?php the_field('crew_description') ?></p>
                </div>
            </div>
            
        </div>
        
    </section>
    <!-- END Crew Section -->

    <!-- Mission Statement -->
    <div class="missionStatementSection">
        <div class="container text-center">
            <div class="row headingSection">
                <div class="col-xs-12 headingLargeElement">
                    <h1><img src="<?php echo $stylesheet_directory; ?>/images/label-numbers-about02.png"><?php the_field('mission_statement_heading') ?></h1>
                    <h2><?php the_field('mission_statement_subheading') ?></h2>
                    
                </div>
            </div>
            <div class="row missionStatementDescription">
                <p class="col-md-7 col-sm-12 center-col"><?php the_field('mission_statement_description') ?></p>
            </div>

            <!-- Tab Row -->
            <div class="row tabContainer">
                <div class="col-md-7 col-sm-12 center-col">
                    <!-- tab -->
                    <div class="tab-style1">

                        <div class="">
                            <!-- tab navigation -->
                            <ul class="nav nav-tabs nav-tabs-light text-left">
                                <?php if ( get_field('mission_statement_tab_section')) : $i = 1; while ( has_sub_field('mission_statement_tab_section')) : ?>
                                <li <?php if ($i === 1) echo "class='active'";?> ><a href="#tab_sec<?php echo $i++; ?>" data-toggle="tab"><?php the_sub_field('tab_name') ?></a></li>
                                <?php endwhile; endif; ?>
                            </ul>
                            <!-- tab end navigation -->
                        </div>

                        <!-- tab content section -->
                        <div class="tab-content">

                            <?php if ( get_field('mission_statement_tab_section')) : $i = 1; while ( has_sub_field('mission_statement_tab_section')) : ?>
                            <!-- tab content -->
                            <div class="tab-pane med-text fade in <?php if ($i === 1) echo "active"; ?>" id="tab_sec<?php echo $i++ ?>">
                                <div class="text-left">
                                    <div class="twoColumns">
                                        <?php the_sub_field('left_column') ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <?php endwhile; endif; ?>

                        </div>
                        <!-- end tab content section -->
                    </div>
                    <!-- end tab -->
                </div>
            </div>
            <!-- End Tab Row -->

                
        </div>
    </div>
    <!-- END Mission Statement -->

    <!-- Parallax -->
    <div class="fix-background parallax aboutPageParallaxSection" style="background-image:url('<?php the_field('parallax_section_image') ?>');">
        <div class="container-fluid position-relative parallaxSection_boundingBox">
            <div class="row parallaxSection aboutPageParallax">
                <div class="signature-lines">
                    <div class="parallaxSection_line"></div>
                    <p class="col-xs-12 text-center parallaxSectionText"><?php the_field('parallax_section_text') ?></p>
                    <div class="parallaxSection_line"></div>
                </div>
            </div>
        </div>
        <div class="divider black"></div>
    </div>
    <!-- END Parallax -->

    <!-- Clients Section -->
    <div class="clientsSection sectionLargeHeading">
        <div class="container text-center">
            <div class="row headingSection">
                <div class="col-xs-12 headingLargeElement">
                    <h1><img src="<?php echo $stylesheet_directory; ?>/images/label-numbers-about03.png"><?php the_field('meet_the_clients_heading') ?></h1>
                    <h2><?php the_field('meet_the_clients_subheading') ?></h2>
                </div>
                <h2><?php the_field('crew_subheading ') ?></h2>
                <p><?php the_field('crew_description ') ?></p>
            </div>
            <div class="row offers text-center">
                <?php if ( get_field('meet_the_clients_columns')) : while ( has_sub_field('meet_the_clients_columns')) : ?>                            
                    <div class="col-sm-4 text-center wow fadeIn features-2" data-wow-duration="300ms">
                        <?php the_sub_field('column_text') ?>
                    </div>
                <?php endwhile; endif; ?>                
            </div>
            <img src="<?php echo $stylesheet_directory; ?>/images/clients_trailing_icon.png" class="trailingIcon" alt="Icon for the end of the section">
        </div>
        
    </div>
    <!-- END Clients Section -->

    <!-- Split Background -->
    <div class="split-background split-background-bottom" data-bg='<?php the_field('split_image_top') ?>'>
        <!-- new project -->
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