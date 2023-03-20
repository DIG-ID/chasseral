<?php
/**
 * Template Name: Vision Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/szl/vision/our-vision' );
		get_template_part( 'template-parts/pages/szl/vision/about-us' );
	do_action( 'after_main_content' );
get_footer();

