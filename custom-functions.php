<?php

function enqueue_style_scripts() {
	wp_enqueue_style('animate', '/css/animate.css');
	wp_enqueue_style('bootstrap', '/css/bootstrap.css');
	wp_enqueue_style('et-line-icons', '/css/et-line-icons.css');
	wp_enqueue_style('font-awesome.min', '/css/font-awesome.min.css');
	wp_enqueue_style('extralayers', '/css/extralayers.css');
	wp_enqueue_style('settings', '/css/settings.css');
	wp_enqueue_style('magnific-popup', '/css/magnific-popup.css');
	wp_enqueue_style('owl.carousel', '/css/owl.carousel.css');
	wp_enqueue_style('owl.transitions', '/css/owl.transitions.css');
	wp_enqueue_style('full-slider', '/css/full-slider.css');
	wp_enqueue_style('text-effect', '/css/text-effect.css');
	wp_enqueue_style('menu-hamburger', '/css/menu-hamburger.css');
	wp_enqueue_style('style', '/css/style.css');
	wp_enqueue_style('responsive', '/css/responsive.css');
	wp_enqueue_style('custom', '/css/custom.css');
}

add_action('wp_enqueue_scripts', 'enqueue_style_scripts');

?>