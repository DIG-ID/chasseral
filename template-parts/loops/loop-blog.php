<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type'        => 'post',
	'posts_per_page'   => 6,
	'paged'            => $paged,
	'category__not_in' => array( get_cat_ID( 'uncategorized' ) ),
	'hide_empty'       => true,
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) :
	while ( $loop->have_posts() ) :
		$loop->the_post();
		get_template_part( 'template-parts/components/card', 'blog' );
	endwhile;
	wp_reset_postdata();
endif;