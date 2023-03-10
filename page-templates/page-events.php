<?php
/**
 * Template Name: Events Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/events/events', 'page-content' );
	do_action( 'after_main_content' );
get_footer();
