<?php

/**
 * Class that creates and manages the Services Status Widget Output.
 */
class ChasseralThemeServicesStatusWidget {

	private $data;
	private $status;
	private $day_names;
	private $services_names;
	private $current_day;
	private $size;
	private $mob;

	public function __construct( $size, $mob ) {
		if ( $size ) :
			$this->size = true;
		endif;
		if ( $mob ) :
			$this->mob = true;
		endif;
		$this->data = get_field( 'service_status', 'services-status' );
		$this->change_order();
		$this->setup_defaults();
		$this->add_day_name_translations();
		$this->get_current_day();
	}

	/**
	 * Setup the defaults propriets for the weidget.
	 */
	private function setup_defaults() {
		$this->status = array(
			'open'      => '<p class="service-status-signal text-sm flex items-center ml-3"><span class="service-status-signal-icon block rounded-full w-[15px] h-[15px] bg-[#1FDD00] mr-1"></span><span class="service-status-signal-text">(' . esc_html__( 'Offen', 'chasseral' ) . ')</span></p>',
			'closed'    => '<p class="service-status-signal text-sm flex items-center ml-3"><span class="service-status-signal-icon block rounded-full w-[15px] h-[15px] bg-[#FF0000] mr-1"></span><span class="service-status-signal-text">(' . esc_html__( 'Geschlossen', 'chasseral' ) . ')</span></p>',
			'undefined' => '<p class="service-status-signal text-sm flex items-center ml-3"><span class="service-status-signal-icon block rounded-full w-[15px] h-[15px] bg-[#B9B9B9] mr-1"></span><span class="service-status-signal-text">(' . esc_html__( 'Unbestimmt', 'chasseral' ) . ')</span></p>',
		);
		$this->day_names = array(
			'monday'    => esc_html__( 'Montag', 'chasseral' ),
			'tuesday'   => esc_html__( 'Dienstag', 'chasseral' ),
			'wednesday' => esc_html__( 'Mittwoch', 'chasseral' ),
			'thursday'  => esc_html__( 'Donnerstag', 'chasseral' ),
			'friday'    => esc_html__( 'Freitag', 'chasseral' ),
			'saturday'  => esc_html__( 'Samstag', 'chasseral' ),
			'sunday'    => esc_html__( 'Sonntag', 'chasseral' ),
		);
		$this->services_names = array(
			'roads'      => esc_html__( 'Strasse:', 'chasseral' ),
			'restaurant' => esc_html__( 'Restaurant:', 'chasseral' ),
			'hotel'      => esc_html__( 'Hotel:', 'chasseral' ),
		);
	}

	/**
	 * Add da names to be able to translate them later.
	 */
	private function add_day_name_translations() {
		foreach ( $this->data as $day => $status ) {
			if ( isset( $this->day_names[ $day ] ) ) {
				$this->data[ $day ]['day_name'] = $this->day_names[ $day ];
			}
		}
	}

	/**
	 * Take the vaules from services and assignt it to an status output.
	 */
	private function get_service_status( $service ) {
		if ( $service ) :
			$current_status = '';
			switch ( $service ) :
				case 'open':
					$current_status = $this->status['open'];
					break;
				case 'closed':
					$current_status = $this->status['closed'];
					break;
				case 'undefined':
					$current_status = $this->status['undefined'];
					break;
			endswitch;
			return $current_status;
		endif;
	}

	/**
	 * Change the order of the array data.
	 */
	private function change_order() {
		$days_of_week        = $this->data;
		$current_day_index   = date( 'N' ) - 1; // get current day of the week index (0 for Sunday, 1 for Monday, etc.)
		$sorted_days_of_week = array_merge(
			array_slice( $days_of_week, $current_day_index ), // get elements from current day index to end of array
			array_slice( $days_of_week, 0, $current_day_index ) // get elements from start of array to current day index
		);

		$this->data = $sorted_days_of_week;
	}

	/**
	 *  Checks todas date to pull data from that date only.
	 */
	private function get_current_day() {
		$current_day = date( 'l' );
		switch ( $current_day ) :
			case 'Monday':
				$this->current_day = $this->data['monday'];
				break;
			case 'Tuesday':
				$this->current_day = $this->data['tuesday'];
				break;
			case 'Wednesday':
				$this->current_day = $this->data['wednesday'];
				break;
			case 'Thursday':
				$this->current_day = $this->data['thursday'];
				break;
			case 'Friday':
				$this->current_day = $this->data['friday'];
				break;
			case 'Saturday':
				$this->current_day = $this->data['saturday'];
				break;
			case 'Sunday':
				$this->current_day = $this->data['sunday'];
				break;
		endswitch;
		return $this->current_day;
	}

	/**
	 * Build the HTML structure for the wigdet output.
	 */
	private function build_html_structure() {
		$output = '';
		$widget_wrapper_open        = '<ul class="service-status">';
		$widget_wrapper_close       = '</ul>';
		$item_wrapper_open          = '<li class="service-status-day grid grid-cols-3 border-b border-solid border-black mb-5 pb-1">';
		$item_wrapper_close         = '</li>';
		$day_name                   = '';
		$service_wrapper_open       = '<span class="service-wrapper flex items-center">';
		$service_wrapper_close      = '</span>';
		$service_name_wrapper_open  = '<p class="service-name text-sm font-bold">';
		$service_name_wrapper_close = '</p>';
		$service_name_road          = $this->services_names['roads'];
		$service_name_restaurant    = $this->services_names['restaurant'];
		$service_name_hotel         = $this->services_names['hotel'];
		$open_widget_btn            = '<button id="services-status-toggle" class="service-status-toggle flex items-center justify-center" data-fancybox data-src="#widget-popup"><span></span><span></span></button>';
		$only_text                  = '<p class="services-status-text hidden fonts-sans font-semibold text-sm uppercase">' . esc_html__( 'Betriebsstatus', 'chasseral' ) . '</p>';

		if ( $this->size ) :
			$one_day           = $this->get_current_day();
			$road_status       = $this->get_service_status( $one_day['road_status'] );
			$restaurant_status = $this->get_service_status( $one_day['restaurant_status'] );
			$hotel_status      = $this->get_service_status( $one_day['hotel_status'] );

			$output .= $widget_wrapper_open;
			$output .= $item_wrapper_open;
			$output .= $only_text;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_road . $service_name_wrapper_close . $road_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_restaurant . $service_name_wrapper_close . $restaurant_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_hotel . $service_name_wrapper_close . $hotel_status . $service_wrapper_close;
			$output .= $open_widget_btn;
			$output .= $item_wrapper_close;
			$output .= $widget_wrapper_close;
		elseif ( $this->mob ) :
			$one_day           = $this->get_current_day();
			$road_status       = $this->get_service_status( $one_day['road_status'] );
			$restaurant_status = $this->get_service_status( $one_day['restaurant_status'] );
			$hotel_status      = $this->get_service_status( $one_day['hotel_status'] );

			$output .= $widget_wrapper_open;
			$output .= $item_wrapper_open;
			$output .= $only_text;
			$output .= '<span class="highway-barrier"><span class="services-list highway-lane">';
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_road . $service_name_wrapper_close . $road_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_restaurant . $service_name_wrapper_close . $restaurant_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_hotel . $service_name_wrapper_close . $hotel_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_road . $service_name_wrapper_close . $road_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_restaurant . $service_name_wrapper_close . $restaurant_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_hotel . $service_name_wrapper_close . $hotel_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_road . $service_name_wrapper_close . $road_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_restaurant . $service_name_wrapper_close . $restaurant_status . $service_wrapper_close;
			$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_hotel . $service_name_wrapper_close . $hotel_status . $service_wrapper_close;
			$output .= '</span></span>';
			$output .= '<span class="service-status-toggle-wrapper">' . $open_widget_btn . '</span>';
			$output .= $item_wrapper_close;
			$output .= $widget_wrapper_close;
		else :
			$output .= $widget_wrapper_open;
			foreach ( $this->data as $day ) :
				$day_name          = '<li><p class="week-day font-bold text-[#747474] uppercase mb-2">' . $day['day_name'] . '</p></li>';
				$road_status       = $this->get_service_status( $day['road_status'] );
				$restaurant_status = $this->get_service_status( $day['restaurant_status'] );
				$hotel_status      = $this->get_service_status( $day['hotel_status'] );

				$output .= $day_name;
				$output .= $item_wrapper_open;
				$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_road . $service_name_wrapper_close . $road_status . $service_wrapper_close;
				$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_restaurant . $service_name_wrapper_close . $restaurant_status . $service_wrapper_close;
				$output .= $service_wrapper_open . $service_name_wrapper_open . $service_name_hotel . $service_name_wrapper_close . $hotel_status . $service_wrapper_close;
				$output .= $item_wrapper_close;
			endforeach;
			$output .= $widget_wrapper_close;
		endif;

		echo wp_kses_post( $output );
	}

	/**
	 * Final render?
	 */
	public function widget_render() {
		$this->build_html_structure();
	}

}

/**
 * The services status widget action.
 */
function chasseral_theme_service_status_widget( $size = false, $mob = false ) {
	$ssw = new ChasseralThemeServicesStatusWidget( $size, $mob );
	$ssw->widget_render();
}
add_action( 'service_status_widget', 'chasseral_theme_service_status_widget', 10, 2 );
