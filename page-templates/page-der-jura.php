<?php
/**
 * Template Name: Der Jura Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/szl/der-jura/geographie' );
		get_template_part( 'template-parts/pages/szl/der-jura/geologie' );
		get_template_part( 'template-parts/pages/szl/der-jura/history' );
		get_template_part( 'template-parts/pages/szl/der-jura/sights' );
	do_action( 'after_main_content' );
get_footer();