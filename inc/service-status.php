<?php


$services_status = array(
	'open'      => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-main-green mr-1"></span>(' . esc_html__( 'Offen', 'chasseral' ) . ')</p>',
	'closed'    => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-main-red mr-1"></span>(' . esc_html__( 'Geschlossen', 'chasseral' ) . ')</p>',
	'undefined' => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-text-grey mr-1"></span>(' . esc_html__( 'Unbestimmt', 'chasseral' ) . ')</p>',
);


/**
 * Get the service status and display it.
 */
function chasseral_theme_status_render( $slug ) {
	global $services_status;
	if ( ! empty( $slug ) ) :
		$field = get_sub_field( $slug );
		if ( $field ) :
			$status = '';
			switch ( $field ) :
				case 'open':
					$status = $services_status['open'];
					break;
				case 'closed':
					$status = $services_status['closed'];
					break;
				case 'undefined':
					$status = $services_status['undefined'];
					break;
			endswitch;
		endif;
		echo wp_kses_post( $status );
	else :

	endif;

}

/**
 * Get the service status wiget render output.
 */
function chasseral_theme_get_widget_output() {
	?>
		<li class="flex items-center">
			<p><?php esc_html_e( 'Strasse:', 'chasseral' ); ?></p>
			<?php chasseral_theme_status_render( 'road_status' ); ?>
		</li>
		<li class="flex items-center">
			<p><?php esc_html_e( 'Restaurant:', 'chasseral' ); ?></p>
			<?php chasseral_theme_status_render( 'restaurant_status' ); ?>
		</li>
		<li class="flex items-center">
			<p><?php esc_html_e( 'Hotel:', 'chasseral' ); ?></p>
			<?php chasseral_theme_status_render( 'hotel_status' ); ?>
		</li>
	<?php
}

/**
 * Get the service status sync reapeater row with date.
 */
function chasseral_theme_sync_rows_with_date() {
	$current_day = date( 'l' );
	$day = '';
	switch ( $current_day ) :
		case 'Monday':
			$day = get_field( 'services_status_week', 'services-status' )[0];
			break;
		case 'Tuesday':
			$day = get_field( 'services_status_week', 'services-status' )[1];
			break;
		case 'Wednesday':
			$day = get_field( 'services_status_week', 'services-status' )[2];
			break;
		case 'Thursday':
			$day = get_field( 'services_status_week', 'services-status' )[3];
			break;
		case 'Friday':
			$day = get_field( 'services_status_week', 'services-status' )[4];
			break;
		case 'Saturday':
			$day = get_field( 'services_status_week', 'services-status' )[5];
			break;
		case 'Sunday':
			$day = get_field( 'services_status_week', 'services-status' )[6];
			break;
	endswitch;
	return $day;
}

/**
 * The full services status action.
 */
function chasseral_theme_service_status() {
	if ( have_rows( 'services_status_week', 'services-status' ) ) :
		echo '<ul class="service-status">';
		while ( have_rows( 'services_status_week', 'services-status' ) ) :
			the_row();
			?>
			<li><p class="week-day font-bold text-[#747474] uppercase mb-2"><?php the_sub_field( 'day' ); ?></p></li>
			<li class="grid grid-cols-3 border-b border-solid border-black mb-5 pb-1">
				<span class="flex items-center">
					<p class="text-sm font-bold"><?php esc_html_e( 'Strasse:', 'chasseral' ); ?></p>
					<?php chasseral_theme_status_render( 'road_status' ); ?>
				</span>
				<span class="flex items-center">
					<p class="text-sm  font-bold"><?php esc_html_e( 'Restaurant:', 'chasseral' ); ?></p>
					<?php chasseral_theme_status_render( 'restaurant_status' ); ?>
				</span>
				<span class="flex items-center">
					<p class="text-sm font-bold"><?php esc_html_e( 'Hotel:', 'chasseral' ); ?></p>
					<?php chasseral_theme_status_render( 'hotel_status' ); ?>
				</span>
			</li>
			<?php
		endwhile;
		echo '</ul>';
	endif;
}

add_action( 'service_status', 'chasseral_theme_service_status' );

/**
 * The services status action widget
 */
function chasseral_theme_service_status_widget() {
	$content = get_field( 'services_status_week', 'services-status' );
	if ( ! empty( $content ) ) :
		$day = chasseral_theme_sync_rows_with_date();
		if ( $day ) :
			?>
			<li class="flex items-center">
				<p><?php esc_html_e( 'Strasse:', 'chasseral' ); ?></p>
				<?php chasseral_theme_status_render( $day ); ?>
			</li>
			<li class="flex items-center">
				<p><?php esc_html_e( 'Restaurant:', 'chasseral' ); ?></p>
				<?php chasseral_theme_status_render( $day['restaurant_status'] ); ?>
			</li>
			<li class="flex items-center">
				<p><?php esc_html_e( 'Hotel:', 'chasseral' ); ?></p>
				<?php chasseral_theme_status_render( $day['hotel_status'] ); ?>
			</li>
		<?php
		endif;
	endif;
}

add_action( 'service_status_widget', 'chasseral_theme_service_status_widget' );