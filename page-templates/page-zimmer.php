<?php
/**
 * Template Name: Zimmer Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/hotel/zimmer/section', 'intro' );
		get_template_part( 'template-parts/pages/hotel/zimmer/section', 'zimmer' );
		get_template_part( 'template-parts/pages/hotel/zimmer/section', 'your-stay' );
		get_template_part( 'template-parts/pages/hotel/zimmer/section', 'group-zimmer' );
	do_action( 'after_main_content' );
get_footer();
