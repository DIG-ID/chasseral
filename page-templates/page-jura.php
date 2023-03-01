<?php
/**
 * Template Name: Top of Jura Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
		//get_template_part( 'template-parts/pages/home/hero' );
	do_action( 'after_main_content' );
get_footer();
