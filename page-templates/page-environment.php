<?php
/**
 * Template Name: Environment Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
		do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/environment/environment-page-content' );
	do_action( 'after_main_content' );
get_footer();
