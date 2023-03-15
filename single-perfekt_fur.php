<?php
get_header( 'jura' );
do_action( 'before_main_content' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'intro' );
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'gallery' );
	endwhile;
endif;
do_action( 'after_main_content' );
get_footer(); 