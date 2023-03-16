<?php
/**
 * Template Name: Hotel Restaurante Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','intro' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','blocks' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','your-stay' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','bankette' );
		get_template_part( 'template-parts/pages/hotel/hotel-restaurant/section','events-list' );
	do_action( 'after_main_content' );
get_footer();
