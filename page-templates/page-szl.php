<?php
/**
 * Template Name: SZL Page Template
 */

get_header( 'szl' );
	do_action( 'before_main_content' );
	do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/szl/banner' );
		get_template_part( 'template-parts/pages/szl/intro' );
		get_template_part( 'template-parts/pages/szl/vision' );
		get_template_part( 'template-parts/pages/szl/exhibition' );
		get_template_part( 'template-parts/pages/szl/der-jura' );
		get_template_part( 'template-parts/pages/szl/partner' );
		get_template_part( 'template-parts/pages/szl/since' );
		get_template_part( 'template-parts/pages/szl/environment' );
	do_action( 'after_main_content' );
get_footer();
