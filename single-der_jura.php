<?php
get_header( 'szl' );
do_action( 'before_main_content' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/posts/der-jura/der-jura', 'single-content' );
	endwhile;
endif;
do_action( 'after_main_content' );
get_footer();