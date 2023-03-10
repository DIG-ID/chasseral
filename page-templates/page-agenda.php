<?php
/**
 * Template Name: Agenda Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/agenda/agenda', 'page-content' );
	do_action( 'after_main_content' );
get_footer();
