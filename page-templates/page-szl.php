<?php
/**
 * Template Name: SZL Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/loops/loop', 'subpages' );
	do_action( 'after_main_content' );
get_footer();
