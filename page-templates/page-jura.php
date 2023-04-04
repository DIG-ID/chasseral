<?php
/**
 * Template Name: Top of Jura Page Template
 */

get_header( 'jura' );
	do_action( 'before_main_content' );
	do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'intro' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'der-chasseral' );
		get_template_part( 'template-parts/modules/activities' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'perfekt-fur' );
		get_template_part( 'template-parts/pages/jura/top-of-jura/section', 'institutionen' );
	do_action( 'after_main_content' );
get_footer();
