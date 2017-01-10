<?php
/*
	Template Name: Contact
*/

get_header(); ?>

    <!-- Contact Us Section -->
    <div class="wow fadeIn contactUsPage_container">
        <div class="container">
            <div class="row headingSection">
                <div class="col-xs-12 text-center headingContainer">
                    <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                    <h1 class="white-text"><?php the_field('page_heading') ?></h1>
                    <h2><?php the_field('page_subheading') ?></h2>
                </div>
            </div>

            <!-- form -->
            <script>
                var templateDir = "<?php echo get_template_directory_uri(); ?>/contact.php";
            </script>

            
            <div class="row contactForm">
                <div class="col-md-4 col-sm-6 text-left">
                    <?php the_field('contact_form_description') ?>
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
            
            <!-- end form -->

        </div>
        <img class="contactUsPage_image" src="<?php the_field('image'); ?>">
        
        

    </div>
    <!-- END Contact Form Section -->
    

<?php
get_footer();