<?php
get_header( 'hotel' );
do_action( 'before_main_content' );
if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();
		//get_template_part( 'template-parts/posts/post/post', 'intro' );;
	endwhile;

endif;
do_action( 'after_main_content' );
get_footer();