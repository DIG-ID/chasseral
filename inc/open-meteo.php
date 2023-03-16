<?php
/**
 * Custom description and icons for the weather based on the WMO Weather interpretation codes (WW).
 */
function get_weather_info( $code, $type = 'description' ) {
	$weather_icons = array(
		'clear_sky'    => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'mainly_clear' => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'fog'          => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'drizzle'      => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'rain'         => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'snow_fall'    => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'rain_showers' => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'snow_showers' => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
		'thunderstorm' => esc_url( get_template_directory_uri() . '/assets/images/weather/sunny.png' ),
	);

	$weather_info = array(
		0  => array(
			'description' => __( 'Klarer Himmel', 'chasseral' ),
			'img_url'     => $weather_icons['clear_sky'],
		),
		1  => array(
			'description' => __( 'Überwiegend klar', 'chasseral' ),
			'img_url'     => $weather_icons['clear_sky'],
		),
		2  => array(
			'description' => __( 'Teilweise bewölkt', 'chasseral' ),
			'img_url'     => $weather_icons['clear_sky'],
		),
		3  => array(
			'description' => __( 'Bedeckt', 'chasseral' ),
			'img_url'     => $weather_icons['clear_sky'],
		),
		45 => array(
			'description' => __( 'Nebel und abgelagerter Reifnebel', 'chasseral' ),
			'img_url'     => $weather_icons['fog'],
		),
		48 => array(
			'description' => __( 'Nebel und abgelagerter Reifnebel', 'chasseral' ),
			'img_url'     => $weather_icons['fog'],
		),
		51 => array(
			'description' => __( 'Nieselregen: Lichtintensität', 'chasseral' ),
			'img_url'     => $weather_icons['drizzle'],
		),
		53 => array(
			'description' => __( 'Nieselregen: Mäßige Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['drizzle'],
		),
		55 => array(
			'description' => __( 'Nieselregen: Dichtere Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['drizzle'],
		),
		56 => array(
			'description' => __( 'Gefrierender Nieselregen: Lichtintensität', 'chasseral' ),
			'img_url'     => $weather_icons['drizzle'],
		),
		57 => array(
			'description' => __( 'Gefrierender Nieselregen: Dichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['drizzle'],
		),
		61 => array(
			'description' => __( 'Regen: Leichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain'],
		),
		63 => array(
			'description' => __( 'Regen: Mäßige Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain'],
		),
		65 => array(
			'description' => __( 'Regen: Starke Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain'],
		),
		66 => array(
			'description' => __( 'Gefrierender Regen: Lichtintensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain'],
		),
		67 => array(
			'description' => __( 'Gefrierender Regen: Starke Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain'],
		),
		71 => array(
			'description' => __( 'Schneefall: Leichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['snow_fall'],
		),
		73 => array(
			'description' => __( 'Schneefall: Mäßige Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['snow_fall'],
		),
		75 => array(
			'description' => __( 'Schneefall: Starke Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['snow_fall'],
		),
		77 => array(
			'description' => __( 'Schneekörner', 'chasseral' ),
			'img_url'     => $weather_icons['snow_fall'],
		),
		80 => array(
			'description' => __( 'Regenschauer: Leichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain_showers'],
		),
		81 => array(
			'description' => __( 'Regenschauer: Heftige Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain_showers'],
		),
		82 => array(
			'description' => __( 'Schneeschauer: Starke Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['rain_showers'],
		),
		85 => array(
			'description' => __( 'Schneeschauer: Leichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['snow_showers'],
		),
		86 => array(
			'description' => __( 'Schneeschauer Starke Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['snow_showers'],
		),
		95 => array(
			'description' => __( 'Gewitter: Leichte Intensität', 'chasseral' ),
			'img_url'     => $weather_icons['thunderstorm'],
		),
		96 => array(
			'description' => __( 'Gewitter mit leichtem Hagel', 'chasseral' ),
			'img_url'     => $weather_icons['thunderstorm'],
		),
		99 => array(
			'description' => __( 'Gewitter mit schwerem Hagel', 'chasseral' ),
			'img_url'     => $weather_icons['thunderstorm'],
		),
	);

	if ( array_key_exists( $code, $weather_info ) ) :
		return $weather_info[ $code ][ $type ];
	else :
		return esc_html__( 'Wettercode nicht gefunden', 'chasseral' );
	endif;
}

/**
 * Make the API call.
 */
function chasseral_theme_get_weather_forecast() {

	$current_date = date_i18n( 'Y-m-d' );
	$end_date     = date_i18n( 'Y-m-d', strtotime( '+4 days' ) );

	// Set the API endpoint and parameters
	$api_endpoint = 'https://api.open-meteo.com/v1/forecast';
	$api_params   = array(
		'latitude'         => 47.127,
		'longitude'        => 7.045,
		'daily'            => 'weathercode,temperature_2m_max',
		'current_weather'  => false,
		'temperature_unit' => 'celsius',
		'forecast_days'    => 5,
		'start_date'       => $current_date,
		'end_date'         => $end_date,
		'timezone'         => 'Europe/Zurich',
	);

	// Make the API request and decode the JSON response
	$api_url = $api_endpoint . '?' . http_build_query( $api_params );

	$response = wp_remote_get( $api_url );

	if ( is_wp_error( $response ) || empty( $response ) ) :
		return false;
	endif;
	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	return $data;
}

/**
 * Display the API results
 */
function chasseral_theme_display_weather_forecast() {
	$data = chasseral_theme_get_weather_forecast();

	if ( ! empty( $data ) ) :

		$daily_forecast = $data['daily'];

		$output = '<ul class="weather-content flex">';

		if ( $daily_forecast ) :
			$count = count( $daily_forecast['time'] );
			for ( $i = 0; $i < $count; $i++ ) :
				$daily_date   = wp_date( 'l, j F', strtotime( $daily_forecast['time'][ $i ] ) );
				$temperature  = $daily_forecast['temperature_2m_max'][ $i ];
				$weather_code = $daily_forecast['weathercode'][ $i ];
				$description  = get_weather_info( $weather_code );
				$icon         = get_weather_info( $weather_code, 'img_url' );

				$output .= '<li>';
				$output .= "<p class='weather-date'>$daily_date</p>";
				$output .= "<img class='weather-icon' src='$icon' alt='$description icon'>";
				$output .= "<p class='weather-temp'>$temperature &deg;C</p>";
				$output .= "<p class='weather-description'>$description</p>";
				$output .= '</li>';
			endfor;
		endif;
		$output .= '</ul>';
		echo wp_kses_post( apply_filters( 'display_weather_forecast_output', $output ) );
	else :
		echo esc_html__( 'Fehler beim Abrufen von Wetterdaten.', 'chasseral' );
		return;
	endif;

}

add_action( 'display_weather_forecast', 'chasseral_theme_display_weather_forecast' );
