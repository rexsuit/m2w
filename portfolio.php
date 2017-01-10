<?php
/*
	Template Name: Portfolio
*/

get_header(); ?>
<?php $stylesheet_directory = get_stylesheet_directory_uri();  ?>

    <!-- head section -->
    <section class="page-title parallax-fix parallax13 page-title-large">
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

    <!-- portfolio section -->
    <div class="work-3col gutter no-margin-top content-section">
        <!-- Texture and symbol -->
        <div class="extra-texture">
            <img src="<?php echo $stylesheet_directory; ?>/images/extra_white_texture.png">
            <img class="symbol" src="<?php the_field( 'symbol' ) ?>">
        </div>
        <!-- End Texture and symbol -->

                <div class="text-center heading no-padding overflow-hidden">
                    <!-- Page Title (small screen) -->
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <!-- END Page Title (small screen) -->
                </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" >
                    <div class="">
                        <!-- work filter -->
                        <ul class="portfolio-filter nav nav-tabs nav-tabs-light animated fadeInUp">
                            <li class="nav active"><a href="#" data-filter="*">All</a></li>
                            <li class="nav"><a href="#" data-filter=".web">Web Design/Development</a></li>
                            <li class="nav"><a href="#" data-filter=".branding">Branding</a></li>
                            <li class="nav"><a href="#" data-filter=".copywriting">Copywriting</a></li>
                            <li class="nav"><a href="#" data-filter=".social">Social Media</a></li>
                            <li class="nav"><a href="#" data-filter=".packaging">Packaging</a></li>
                            <li class="nav"><a href="#" data-filter=".multimedia">Multimedia</a></li>
                            <li class="nav"><a href="#" data-filter=".marketing">Marketing</a></li>
                            <li class="nav"><a href="#" data-filter=".print">Print</a></li>
                        </ul>
                        <!-- end work filter -->
                    </div>
                </div>

                <div class="col-md-12 grid-gallery overflow-hidden" >
                    <div class="tab-content">
                        <!-- Portfolio grid -->
                        <ul class="grid masonry-items">
                            
                            <?php 

                                $args = array(
                                    "post_type" => "mb_project",
                                    "posts_per_page" => -1,
                                    "orderby" => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
                                );

                                $query = new WP_Query($args);
                                while($query -> have_posts()) : $query -> the_post();

                            ?>
                                <li class="<?php echo strtolower(strip_tags(get_the_tag_list('', ' ' , ''))) ?>">
                                    <figure>
                                        <div class="gallery-img">
                                            <a href="<?php the_sub_field('link'); ?><?php echo get_permalink() ?>">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </div>
                                        <figcaption>
                                            <h3><img src="<?php echo $stylesheet_directory; ?>/images/orange_symbol.png"><?php the_sub_field('project_title') ?> <?php the_title() ?></h3>
                                            <p><?php echo strip_tags(get_the_tag_list("", " | ", "")) ?></p>
                                        </figcaption>
                                    </figure>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>

                            
                        </ul>
                        <!-- end Portfolio grid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end portfolio section -->

    <!-- new project -->
    <section class="new-project no-padding-top">
        <div class="container">
            <div class="row center-col text-center wow fadeInUp">
                <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                <h5 class="wow fadeInDown"><?php the_field('next_page_blurb') ?></h5>
                <a class="btn highlight-button-black-border margin-four no-margin-bottom wow fadeInUp" href="<?php the_field('next_page_link') ?>"><?php the_field('next_page_button_text') ?></a>
            </div>
        </div>
    </section>
    <!-- end new project -->

<style type="text/css" media="screen, print">
    .grid figure:hover .gallery-img {
        background-image: url('<?php echo $stylesheet_directory; ?>/images/portfolio-butons-v2.jpg');
    }
</style>

<?php
get_footer();