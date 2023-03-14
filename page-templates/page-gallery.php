<?php
/**
 * Template Name: Gallery Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/page/header' );
		//get_template_part( 'template-parts/pages/gallery/gallery', 'video' );
		get_template_part( 'template-parts/pages/gallery/gallery', null, array( 'class' => 'szl' ) );
		get_template_part( 'template-parts/pages/gallery/gallery', null, array( 'class' => 'hotel' ) );
		get_template_part( 'template-parts/pages/gallery/gallery', null, array( 'class' => 'jura' ) );
	do_action( 'after_main_content' );
get_footer();
