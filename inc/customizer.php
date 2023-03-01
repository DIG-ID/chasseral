<?php
/**
 * Register theme customizer
 */

function chasseral_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'chasseral_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Chasseral Theme Options', 'chasseral' ),
			'description'    => __( 'Theme options for the Chasseral Theme', 'chasseral' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'chasseral_theme_customizer_register' );
