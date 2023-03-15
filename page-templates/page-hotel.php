<?php
/**
 * Template Name: Hotel Restaurante Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','intro' );
	do_action( 'after_main_content' );
get_footer();
