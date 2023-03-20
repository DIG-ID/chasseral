<?php
/**
 * Template Name: Activities Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/jura/activities/section', 'intro' );
		get_template_part( 'template-parts/pages/jura/activities/section', 'all-activities' );
	do_action( 'after_main_content' );
get_footer();
