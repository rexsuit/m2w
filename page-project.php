<?php
/*
    Template Name: Project Page
    Template Post Type: post, page, product
*/
$header_image = get_field('header_image');
$project_title = get_field('project_title');
$stylesheet_directory = get_stylesheet_directory_uri();

get_header(); ?>

        <!-- next/previous project -->
        <div class="next-previous-project xs-display-none">

            <!-- next project -->
            <?php if ( get_field('next_project')) : while ( has_sub_field('next_project')) : ?>
            <div class="next-project">
                <a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $stylesheet_directory;; ?>/images/next-project.png" class="next-project-img" alt="Next Project"><span>Next Project</span><!-- next project image --><img src="<?php the_sub_field('image') ?>" alt="Next Project"><!-- end next project image --></a>
            </div>
            <?php endwhile; endif; ?>
            <!-- end next project -->
            
            <!-- next project -->
            <?php if ( get_field('previous_project')) : while ( has_sub_field('previous_project')) : ?>
            <div class="previous-project">
                <a href="<?php the_sub_field('link'); ?>"><!-- previous project image --><img src="<?php the_sub_field('image') ?>" alt="Previous Project"><!-- end previous project image --><img src="<?php echo $stylesheet_directory; ?>/images/previous-project.png" class="previous-project-img" alt="Previous Project"><span>Previous Project</span></a>
            </div>
            <?php endwhile; endif; ?>
            <!-- end next project -->

        </div>
        <!-- end next/previous project -->

        <!-- Header Image -->
        <?php if ( $header_image ) :  ?>
        <section class="project-img">
            <img src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>"/>                 
        </section>
        <?php endif; ?>
        <!-- End Header Image -->

        <!-- Project Blurb -->
        <?php if ( $project_title ) :  ?>
        <section class="no-padding">
            <div class="container">
                <div class="row project-content">
                    <div class="col-md-7 col-sm-10 center-col text-center text-med">
                        <h6 class="wow"><strong class="black-text"><?php echo $project_title; ?></strong></h6>
                        <p class="wow"><?php the_field('project_categories') ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- End Project Blurb -->
        
        <!-- Project Images -->
        <?php $images = get_field('project_images');
            if( $images ): ?>
            <div class="no-padding-top">
                <div class="project-img">

                <?php foreach( $images as $image ): ?>
                        <img  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
        <!-- End Project Images -->

        <!-- Description Section -->
        <section class="description">
            <div class="container projectsContainer">
                <div class="row">
                    <div class="col-xs-8 col-sm-2 sidebarTitle hidden-xs">
                        
                        <h2><img src="<?php echo $stylesheet_directory;; ?>/images/orange_symbol.png" class="headingDescription-titleSymbol" alt="">Case Study</h2>
                        <p>Launched: <?php echo the_field('launch_year'); ?><br>Project MB-<?php echo the_field('project_number'); ?></p>
                    </div>
                    <div class="col-xs-4 col-sm-1 sidebarElementColumn hidden-xs"><div class="diagonalLine"></div></div>
                    <div class="col-sm-8 projectInfo">
                        <h2><?php echo the_field('project_title'); ?></h2>
                        <p><?php echo the_field('project_info_line_1'); ?><br><i><?php echo the_field('project_info_line_2'); ?></i><br><?php echo the_field('project_info_line_3'); ?></p>
                        <h3>Project Description</h3>
                        <?php echo the_field('project_description'); ?>
                        <div class="projectInfo__divider"></div>
                        <p class="waterMark">Designed by Moon Beyond Creative</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Description Section -->

<?php
get_footer();
