<?php
get_header( 'jura' );
do_action( 'before_main_content' );
do_action( 'breadcrumbs' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'intro' );
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'gallery' );
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'pdf' );
		get_template_part( 'template-parts/posts/perfekt-fur/section', 'preview' );
	endwhile;
endif;
do_action( 'after_main_content' );
get_footer(); 