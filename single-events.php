<?php
get_header( 'hotel' );
do_action( 'before_main_content' );
do_action( 'breadcrumbs' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/posts/events/event', 'single-content' );
	endwhile;
endif;
do_action( 'after_main_content' );
get_footer();