<?php
$featured_events = get_field( 'agenda_&_events' );
if ( $featured_events ) :
	foreach ( $featured_events as $post ) :
		setup_postdata( $post );
		get_template_part( 'template-parts/components/card', 'agenda-event' );
	endforeach;
	wp_reset_postdata();
endif;