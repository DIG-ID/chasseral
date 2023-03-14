<?php
/**
 * Template Name: Perfect for Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/jura/perfektfur/section', 'intro' );
		get_template_part( 'template-parts/pages/jura/perfektfur/section', 'list' );
	do_action( 'after_main_content' );
get_footer();
