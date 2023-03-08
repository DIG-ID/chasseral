<?php
/**
 * Template Name: Top of Jura Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
		//get_template_part( 'template-parts/loops/loop', 'subpages' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'intro' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'der-chasseral' );
	do_action( 'after_main_content' );
get_footer();
