<?php
/**
 * Template Name: Bankette Page Template
 */

get_header( 'hotel' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/hotel/bankette/section','intro' );
		get_template_part( 'template-parts/pages/hotel/bankette/section','kontakt' );
		get_template_part( 'template-parts/pages/hotel/bankette/section','blocks' );
	do_action( 'after_main_content' );
get_footer();
