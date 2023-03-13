<?php
$blog_posts = get_field( 'blog' );
if ( $blog_posts ) :
	foreach ( $blog_posts as $post ) :
		setup_postdata( $post );
		get_template_part( 'template-parts/components/card', 'blog' );
	endforeach;
	wp_reset_postdata();
endif;