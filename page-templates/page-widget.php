<?php
/**
 * Template Name: Widget Template
 */

get_header( 'main' );
	do_action( 'before_main_content' );
		echo '<section class="mt-40 container mx-auto">';
		do_action( 'my_action' );
		echo '</section>';
	do_action( 'after_main_content' );
get_footer();
