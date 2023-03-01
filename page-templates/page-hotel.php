<?php
/**
 * Template Name: Hotel Restaurante Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/hotel/subpages' );
	do_action( 'after_main_content' );
get_footer();
