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
function chasseral_theme_mega_menu_link( $slug, $img ) {

	if ( ! empty( $slug ) ) :
		if( $img !== true ) :
			$link_logo = get_field( "theme_logos_{$slug}", 'options' );
			$link_root = get_field( "root_pages_{$slug}", 'options' );
			if ( $link_logo && $link_root ) :
				$lc = '<a href="' . esc_url( get_permalink( $link_root->ID ) ) . '" class="block mb-10">';
				$lc .= '<img src="' . esc_url( $link_logo['url'] )  . '" alt="' . $link_logo['alt'] . '" class="max-w-[175px]">';
				$lc.= '<span class="flex justify-between items-center"><h2 class="font-bold text-3xl font-sans text-black uppercase my-5">' . $link_root->post_title . '</h2><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"/></svg></span>';
				$lc .= '<hr></a>';
				echo $lc;
			endif;
		endif;
	else :
		echo 'You need to pass a slug for the link! The slud is the name of the acf field.';
	endif;
}

add_action( 'mega_menu_link', 'chasseral_theme_mega_menu_link', 10, 2 );
