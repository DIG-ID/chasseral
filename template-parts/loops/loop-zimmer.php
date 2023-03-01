<?php

$a = array(
	'post_type' => 'rooms',
);
$q = new WP_Query( $a );

if ( $q->have_posts() ) :
	while ( $q->have_posts() ) :
		$q->the_post();
		the_title();
	endwhile;
	wp_reset_postdata();
endif;
