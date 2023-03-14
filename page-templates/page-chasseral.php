<?php
/**
 * Template Name: Chasseral Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/jura/chasseral/section','list' );
	do_action( 'after_main_content' );
get_footer();
