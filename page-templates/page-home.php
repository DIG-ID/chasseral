<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/hero' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/pages/home/sub-pages' );
		get_template_part( 'template-parts/pages/home/about' );
		get_template_part( 'template-parts/pages/home/agenda-events' );
		get_template_part( 'template-parts/pages/home/blog' );
	do_action( 'after_main_content' );
get_footer();
