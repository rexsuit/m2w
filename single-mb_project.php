<?php
/*

Template Name: MB Project
Template Post Type: post, page, product, MB Project

 */

$header_image = get_field('header_image');
$project_title = get_field('project_title');
$stylesheet_directory = get_stylesheet_directory_uri();

get_header(); ?>


        <!-- next/previous project -->
        <div class="next-previous-project xs-display-none">

            <!-- next project -->
            <div class="next-project">
                <?php $next_post_id = next_post_link_plus(array('order_by' => 'menu_order', 'return' => 'id', 'loop' => true)); ?>
                <a href="<?php echo get_permalink($next_post_id) ?>"><img src="<?php echo $stylesheet_directory;; ?>/images/next-project.png" class="next-project-img" alt="Next Project"><span>Next Project</span><!-- next project image --><?php echo get_the_post_thumbnail($next_post_id, "medium"); ?><!-- end next project image --></a>
            </div>
            <!-- end next project -->
            
            <!-- previous project -->
            <div class="previous-project">
                <?php $previous_post_id = previous_post_link_plus(array('order_by' => 'menu_order', 'return' => 'id', 'loop' => true)); ?>
                <a href="<?php echo get_permalink($previous_post_id) ?>"><!-- previous project image --><?php echo get_the_post_thumbnail($previous_post_id, "medium"); ?><!-- end previous project image --><img src="<?php echo $stylesheet_directory; ?>/images/previous-project.png" class="previous-project-img" alt="Previous Project"><span>Previous Project</span></a>
            </div>
            <!-- end previous project -->

        </div>
        <!-- end next/previous project -->

        <!-- Header Image -->
        <?php if ( $header_image ) :  ?>
        <section class="project-img">
            <img class="fade-in" src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>"/>                 
        </section>
        <?php endif; ?>
        <!-- End Header Image -->

        <style type="text/css">
            
            /*@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }*/

            .fade-in {
              opacity:0;  /* make things invisible upon start */
              -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
              -moz-animation:fadeIn ease-in 1;
              animation:fadeIn ease-in 1;

              -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
              -moz-animation-fill-mode:forwards;
              animation-fill-mode:forwards;

              -webkit-animation-duration:1s;
              -moz-animation-duration:1s;
              animation-duration:1s;
            }


        </style>

        <!-- Project Blurb -->
        <?php if ( $project_title ) :  ?>
        <section class="no-padding">
            <div class="container">
                <div class="row project-content">
                    <div class="col-md-7 col-sm-10 center-col text-center text-med">
                        <h6 class="wow fadeIn animated"><strong class="black-text"><?php echo $project_title; ?></strong></h6>
                        <p class="wow fadeIn animated"><?php the_field('project_categories') ?></p>
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
                        <img class="wow fadeIn animated" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
        <!-- End Project Images -->

        <!-- Description Section -->
        <section class="description">
            <div class="container projectsContainer">
                <div class="row wow fadeIn animated">
                    <div class="col-xs-8 col-sm-2 sidebarTitle hidden-xs ">
                        
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
