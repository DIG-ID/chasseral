<?php
/**
 * Setup theme
 */
function chasseral_theme_setup() {

	register_nav_menus(
		array(
			'main'         => __( 'Main Menu', 'chasseral' ),
			'hotel'        => __( 'Hotel Menu', 'chasseral' ),
			'jura'         => __( 'Jura Menu', 'chasseral' ),
			'szl'          => __( 'SZL Menu', 'chasseral' ),
			'footer'       => __( 'Footer Menu', 'chasseral' ),
			'footer_terms' => __( 'Footer Terms Menu', 'chasseral' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );

	set_post_thumbnail_size( 500, 350, 'center', 'center' );

	add_image_size( 'gallery-full', 1024, false );

	add_image_size( 'mega-link-thumbnail', 1000, 500, array( 'center', 'center' ) );

	add_image_size( 'sub-page-thumbnail', 700, 700, array( 'center', 'center' ) );

	add_image_size( 'activities-thumbnail', 420, 282, array( 'center', 'center' ) );

	add_image_size( 'section-column-img', 961, 706, array( 'center', 'center' ) );

	add_image_size( 'agenda-event-thumbnail', 750, 750, array( 'center', 'center' ) );

	add_image_size( 'agenda-thumbnail', 550, 550, array( 'center', 'center' ) );

	add_image_size( 'event-thumbnail', 450, 450, array( 'center', 'center' ) );

	add_image_size( 'perfekt-fur-thumbnail', 640, 470, array( 'center', 'center' ) );

	add_image_size( 'institutionen-thumbnail', 420, 310, array( 'center', 'center' ) );

	add_image_size( 'chasseral-page--thumbnail', 960, 1056, array( 'center', 'center' ) );

	add_image_size( 'chasseral-jura-preview--thumbnail', 530, 575, array( 'center', 'center' ) );

	add_image_size( 'chasseral-jura-headers', 1920, 500, array( 'center', 'center' ) );

	add_image_size( 'chasseral-jura-headers-top', 1920, 501, array( 'center', 'top' ) );

	add_image_size( 'block-images', 1000, 700, array( 'center', 'center' ) );

	add_image_size( 'vision-block-images', 1000, 1000, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'chasseral_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function chasseral_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}

add_action( 'widgets_init', 'chasseral_theme_footer_widgets_init' );

if ( ! function_exists( 'chasseral_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function chasseral_get_font_face_styles() {

		return "
			/* cyrillic-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 300;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 300;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 300;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 300;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
				unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 300;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			/* cyrillic-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 400;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 400;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 400;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 400;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
				unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 400;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			/* cyrillic-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 600;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 600;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 600;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 600;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
				unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 600;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			/* cyrillic-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 700;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 700;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 700;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 700;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
				unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 700;
				src: url(https://fonts.gstatic.com/s/montserrat/v25/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
		";

	}

endif;

if ( ! function_exists( 'chasseral_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function chasseral__preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'chasseral__preload_webfonts' );

/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( ( get_the_category( $post->ID ) ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */

function chasseral_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/app.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', chasseral_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/app.js', array( 'jquery' ), $theme_version, false );
	if ( is_page_template( 'page-templates/page-contact.php' ) || is_admin() ) :
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0&callback=initMap', array(), $theme_version, true );
	endif;
	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'chasseral_theme_enqueue_styles' );

//Google Map Init
function chasseral_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0' );
	endif;
}
add_action( 'acf/init', 'chasseral_theme_google_map_init' );

/**
 * Wrap the post thumbnail image in a figure element only in the blog posts and project posts.
 */
/*function chasseral_wrap_post_thumbnail_in_figure( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	$allowed_sizes = array( 'card-post-thumbnail', 'card-project-thumbnail-portrait', 'card-project-thumbnail-landscape' );
	if ( ! in_array( $size, $allowed_sizes ) ) :
		return $html;
	endif;
	return '<a href="' . get_the_permalink() . '"><figure>' . $html . '</figure></a>';
}

add_filter( 'post_thumbnail_html', 'chasseral_wrap_post_thumbnail_in_figure', 10, 5 );*/

// Remove <p> from Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );


/**
 * Create a customized options page and store the data in a variable for later use
 */
function chasseral_theme_acf_op_gc_init() {
	if ( function_exists( 'acf_add_options_page' ) ) :
		$theme_option_page = acf_add_options_page(
			array(
				'page_title'      => __( 'Chasseral Theme Options', 'chasseral' ),
				'menu_title'      => __( 'Chasseral Theme', 'chasseral' ),
				'menu_slug'       => 'chasseral-theme-general-options',
				'capability'      => 'edit_posts',
				'icon_url'        => 'dashicons-admin-appearance',
				'redirect'        => false,
				'update_button'   => __( 'Update Theme Options', 'chasseral' ),
				'updated_message' => __( 'Chasseral Theme Options Updated', 'chasseral' ),
			)
		);
		$service_status_option = acf_add_options_page(
			array(
				'page_title'      => __( 'Services Status', 'chasseral' ),
				'menu_title'      => __( 'Services Status', 'chasseral' ),
				'menu_slug'       => 'services-status-options',
				'capability'      => 'edit_posts',
				'icon_url'        => 'dashicons-admin-appearance',
				'redirect'        => false,
				'update_button'   => __( 'Update Status', 'chasseral' ),
				'updated_message' => __( 'Service Status Updated', 'chasseral' ),
				'post_id'         => 'services-status',
			)
		);
	endif;
}

add_action( 'acf/init', 'chasseral_theme_acf_op_gc_init' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function parsber_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'parsber_theme_lower_yoast_metabox_priority' );

/**
 * Remove the "Archives:" from a custom post type archive page title.
 */
function chasseral_theme_remove_archive_prefix( $title ) {
	if ( is_post_type_archive( 'zimmer' ) ) :
		$title = post_type_archive_title( '', false );
	elseif ( is_post_type_archive( 'aktivitaten' ) ) :
		$title = post_type_archive_title( '', false );
	endif;
	return $title;
}

add_filter( 'get_the_archive_title', 'chasseral_theme_remove_archive_prefix' );


// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The Service Status functionality.
require get_template_directory() . '/inc/services-status.php';

// The weather API.
require get_template_directory() . '/inc/open-meteo.php';

// The theme admin settings
require get_template_directory() . '/inc/theme-admin-settings.php';



function console_log( $output, $with_script_tags = true ) {
	$js_code = 'console.log(' . wp_json_encode( $output, JSON_HEX_TAG ) . ');';
	if ( $with_script_tags ) :
		$js_code = '<script>' . $js_code . '</script>';
	endif;
	echo $js_code;
}

/**
 * Conditionally Override Yoast SEO Breadcrumb Trail
 * https://plugins.svn.wordpress.org/wordpress-seo/trunk/frontend/class-breadcrumbs.php
 * -----------------------------------------------------------------------------------
 * Further amended by Kent House to set custom landing page for 'project' custom post type
 * and landing page for normal posts to a manually created 'blog' page 
*/
function chasseral_theme_override_yoast_breadcrumb_trail( $links ) {
	global $post;

	switch ( $post->post_type ) :
		case 'agenda':
			$breadcrumb[] = array(
				'url'  => get_permalink( get_field( 'archives_pages_agenda', 'options' ) ),
				'text' => __( 'Agenda', 'chasseral' ),
			);
			array_splice( $links, 1, -2, $breadcrumb );
			break;
		case 'events':
			$breadcrumb[] = array(
				'url'  => get_permalink( get_field( 'archives_pages_events', 'options' ) ),
				'text' => __( 'Events', 'chasseral' ),
			);
			array_splice( $links, 1, -2, $breadcrumb );
			break;
		case 'der_jura':
			$breadcrumb[] = array(
				'url'  => get_permalink( get_field( 'archives_pages_der_jura', 'options' ) ),
				'text' => __( 'der Jura', 'chasseral' ),
			);
			array_splice( $links, 1, -2, $breadcrumb );
			break;
		case 'perfekt_fur':
			$breadcrumb[] = array(
				'url'  => get_permalink( get_field( 'archives_pages_perfekt_fur', 'options' ) ),
				'text' => __( 'Perfekt fur', 'chasseral' ),
			);
			array_splice( $links, 1, -2, $breadcrumb );
			break;
		case 'zimmer':
			$breadcrumb[] = array(
				'url'  => get_permalink( get_field( 'archives_pages_zimmer', 'options' ) ),
				'text' => __( 'Zimmer', 'chasseral' ),
			);
			array_splice( $links, 1, -2, $breadcrumb );
			break;
	endswitch;

	return $links;
}

add_filter( 'wpseo_breadcrumb_links', 'chasseral_theme_override_yoast_breadcrumb_trail' );

/**
* Enables the HTTP Strict Transport Security (HSTS) header in WordPress.
*/
function chasseral_theme_enable_strict_transport_security_hsts_header_wordpress() {
	header( 'Strict-Transport-Security: max-age=31536000' );
}

add_action( 'send_headers', 'chasseral_theme_enable_strict_transport_security_hsts_header_wordpress' );