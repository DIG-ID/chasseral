<?php
/**
 * Get openWeather API call.
 *
 */
function chasseral_theme_get_weather_forecast() {
	$api_key      = '5db4dc8b36912c419f75b525d04391b7';
	$city         = 'Switzerland';
	$country_code = 'ch';
	$api_url      = "https://api.openweathermap.org/data/2.5/forecast?q=$city,$country_code&appid=$api_key";

	$response = wp_remote_get( $api_url );

	if ( is_wp_error( $response ) || empty( $response ) ) :
		return false;
	endif;

	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	return $data;
}

/**
 * Display the API results
 *
 */
function chasseral_theme_display_weather_forecast() {
	$data = chasseral_theme_get_weather_forecast();

	if ( ! $data ) {
		echo __( 'Error retrieving weather data.', 'chasseral' );
		return;
	}

	$forecast = $data['list'];

	$output = '<ul class="flex">';
	$count = 0; // Counter variable

	foreach ( $forecast as $i => $weather ) {
		$date        = gmdate( 'l, F jS', strtotime( $weather['dt_txt'] ) );
		$description = $weather['weather'][0]['description'];
		$temp        = round( $weather['main']['temp'] - 273.15 );
		$humidity    = $weather['main']['humidity'];
		$class       = '';

		if ( $weather['weather'][0]['main'] === 'Clear' ) {
			$icon_url = 'https://example.com/custom-clear.png';
		} else if ( $weather['weather'][0]['main'] === 'Clouds' ) {
			$icon_url = 'https://example.com/custom-clouds.png';
		} else {
			$icon_url = "https://openweathermap.org/img/w/{$weather['weather'][0]['icon']}.png";
		}

		if ( $i === 0 ) {
			$class = 'today';
		}

		if ( $count < 5 ) { // Conditional statement to limit loop to first 5 elements
			$output .= "<li><strong>$date</strong><br />";
			$output .= "<img src='$icon_url' alt='$description' /><br />";
			$output .= __( 'Temperature:', 'chasseral' ) . " $temp &deg;C<br />";
			$output .= __( 'Humidity:', 'chasseral' ) . " $humidity%</li>";
			$count++; // Increment counter variable
		}
	}

	$output .= '</ul>';

	echo apply_filters( 'display_weather_forecast_output', $output );
}

add_action( 'display_weather_forecast', 'chasseral_theme_display_weather_forecast' );

