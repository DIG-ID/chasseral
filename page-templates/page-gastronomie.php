<?php
/**
 * Template Name: Gastronomie Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/hotel/gastronomie/section','intro' );
		get_template_part( 'template-parts/pages/hotel/gastronomie/section','specials' );
	do_action( 'after_main_content' );
get_footer();
