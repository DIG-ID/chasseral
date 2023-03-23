<?php
/**
 * Template Name: Jobs Page Template
 */

get_header();
	do_action( 'before_main_content' );~
		do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/page/header' );
		get_template_part( 'template-parts/pages/jobs/jobs', 'page-content' );
		get_template_part( 'template-parts/pages/jobs/jobs', 'contact' );
	do_action( 'after_main_content' );
get_footer();