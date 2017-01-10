<?php
/*
	Template Name: 404 (page not found)
*/

get_header(); ?>

    <!-- content section -->
        <section class="no-padding-bottom notFoundPage_container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-8 col-xs-11 text-center center-col notFoundText">
                        <p class="not-found-title">404!</p>
                        <p class="text-med text-uppercase letter-spacing-2">We couldn't send a signal to your destination!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-8 col-xs-11 center-col notFoundImage">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-Icon.png" alt="404 Error Image" />
                    </div>
                    <div class="col-md-10 col-sm-8 col-xs-11 text-center center-col notFoundButton">
                        <a class="btn-small-white-background btn btn-small no-margin-right" href="<?php echo home_url() ?>">Go to home page</a>
                    </div>

                </div>
                    
            </div>
        </section>
        <!-- end content section -->

<?php
get_footer();