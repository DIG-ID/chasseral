<?php
/**
 * Get our socials from the theme customizer and display them.
 */
function chasseral_theme_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$linkedin_url  = get_theme_mod( 'linkedin_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook">Facebook</a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram">Instagram</a>';
	endif;
	if ( ! empty( $linkedin_url ) ) :
		echo '<a href="' , esc_url( $linkedin_url ) , '" target="_blank" class="social-link social-link__linkedin">LinkedIn</a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'chasseral_theme_socials' );

/**
 * This function open the main content.
 */
function chasseral_theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'chasseral_theme_before_main_content' );

/**
 * This function closes the main content.
 */
function chasseral_theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'chasseral_theme_after_main_content' );

/**
 * This function open the post content.
 */
function chasseral_theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'chasseral_theme_before_post_content' );

/**
 * This function closes the post content.
 */
function chasseral_theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'chasseral_theme_after_post_content' );

/**
 * This function gets the logo and link for the mega menu.
 */
function chasseral_theme_mega_menu_link( $slug, $type ) {

	if ( ! empty( $slug ) ) :
		
		$logo = get_field( "theme_logos_{$slug}", 'options' );
		$root = get_field( "root_pages_{$slug}", 'options' );

		$link_logo = $link_open = $link_open_b = $link_close = $link_title = $link_render = $link_img = '';

		$separator    = '<hr>';
		$link_arrow   = '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"/></svg>';
		$title_before = '<span class="flex justify-between items-center">';
		$title_after  = '</span>';

		if ( ! empty( $logo ) ) :
			$link_logo = '<img src="' . esc_url( $logo['url'] )  . '" alt="' . $logo['alt'] . '" class="max-w-[175px]">';
		endif;
		if ( ! empty( $root ) ) :
			$root_id     = $root->ID;
			$link_open   = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="block mb-10">';
			$link_open_b = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="custom-logo-link">';
			$link_close  = '</a>';
			$link_title  = '<h2 class="font-bold text-3xl font-sans text-black uppercase my-5">' . $root->post_title . '</h2>';
			if ( has_post_thumbnail( $root_id ) ) :
				$link_img = wp_get_attachment_image_url( $root_id, 'full' );
			endif;
		endif;

		if ( 'mega-menu' === $type ) :
			$link_render  = $link_open;
			$link_render .= $link_logo;
			$link_render .= $title_before;
			$link_render .= $link_title;
			$link_render .= $link_arrow;
			$link_render .= $title_after;
			$link_render .= $separator;
			$link_render .= $link_close;
		elseif ( 'mega-menu-bg' === $type ) :
			$link_render  = $link_open;
			$link_render .= $title_before;
			$link_render .= $link_title;
			$link_render .= $link_arrow;
			$link_render .= $title_after;
			$link_render .= $link_close;
			$link_render .= $link_img;
		elseif ( 'mega-menu-simple' === $type ) :
			$link_render  = $link_open_b;
			$link_render .= $link_logo;
			$link_render .= $link_close;
		else :
			$link_render = 'Missing second argument wich is the type of the link, could be: mega-menu, mega-menu-bg or mega-menu-simple';
		endif;
		echo $link_render;
	else :
		echo 'You need to pass a slug for the link! The slud is the name of the acf field.';
	endif;
}

add_action( 'mega_menu_link', 'chasseral_theme_mega_menu_link', 10, 2 );
