<?php


/**
 * Undocumented class
 */
class ServicesStatus {

	
	private $data;
	private $status;
	/**
	 * Undocumented variable
	 */
	/*public $status = array(
		'open'      => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-main-green mr-1"></span>(' . esc_html__( 'Offen', 'chasseral' ) . ')</p>',
		'closed'    => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-main-red mr-1"></span>(' . esc_html__( 'Geschlossen', 'chasseral' ) . ')</p>',
		'undefined' => '<p class="status-signal text-sm flex items-center ml-3"><span class="status-signal-icon block rounded-full w-[15px] h-[15px] bg-text-grey mr-1"></span>(' . esc_html__( 'Unbestimmt', 'chasseral' ) . ')</p>',
	);*/


	// Constructor method (called when object is created)
	public function __construct() {
		// Initialize object properties with constructor arguments
		//$this->status = $param1;
		$this->data = get_field( 'service_status_2', 'services-status' );
	}


	/**
	 * Undocumented function
	 */
	public function sync_data_to_date() {
		$current_day = date( 'l' );
		$day = '';
		switch ( $current_day ) :
			case 'Monday':
				$day = $this->data['0'];
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
	 * Undocumented function
	 */
	public function html() {
		echo 'html';
	}

	/**
	 * Undocumented function
	 */
	public function render() {
		//echo '<pre>' . print_r($this->data) . '</pre>';
		console_log( $this->data);
		//return $this->data;
	}


}




// Define the WordPress action
function my_function() {
	$my_object = new ServicesStatus();
	$my_object->render();
}
add_action( 'my_action', 'my_function' );
