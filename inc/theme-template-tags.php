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

		$link_logo = $link_open = $link_open_b = $link_close = $link_title = $link_render = $link_img = $link_class = '';
		

		$separator    = '<hr>';
		$link_arrow   = '<span class="mega-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"/></svg></span>';
		$title_before = '<span class="mega-link-title-wrapper flex justify-between items-center">';
		$title_after  = '</span>';

		if ( 'hotel_restaurant' === $slug ) :
			$link_class = 'mega-link--hotel';
		elseif ( 'top_of_jura' === $slug ) :
			$link_class = 'mega-link--top-of-jura';
		elseif ( 'szl' === $slug ) :
			$link_class = 'mega-link--szl';
		endif;

		if ( ! empty( $logo ) ) :
			$link_logo = '<img src="' . esc_url( $logo['url'] )  . '" alt="' . $logo['alt'] . '" class="max-w-[175px]">';
		endif;
		if ( ! empty( $root ) ) :
			$root_id     = $root->ID;
			$link_open   = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="mega-link ' . $link_class . '">';
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
			$link_render .= $link_img;
			$link_render .= $link_close;
		elseif ( 'mega-menu-simple' === $type ) :
			$link_render  = $link_open_b;
			$link_render .= $link_logo;
			$link_render .= $link_close;
		else :
			$link_render = 'Missing second argument wich is the type of the link, could be: mega-menu, mega-menu-bg or mega-menu-simple';
		endif;
		echo $link_render;
	else :
		echo 'You need to pass a slug for the link! The slug is the name of the ACF field.';
	endif;
}

add_action( 'mega_menu_link', 'chasseral_theme_mega_menu_link', 10, 2 );


/**
 * This function gets the info fromsub pages.
 */
function chasseral_theme_sub_pages( $slug ) {

	if ( ! empty( $slug ) ) :
		$logo          = get_field( "theme_logos_{$slug}", 'options' );
		$root          = get_field( "root_pages_{$slug}", 'options' );
		$link_logo     = $link_open = $link_close = $link_title = $link_render = $link_img = $link_class = '';
		$link_arrow    = '<span class="sub-page-link--icon"><svg width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"/></svg></span>';
		$title_before  = '<span class="sub-page-link--title-wrapper flex justify-between items-center">';
		$title_after   = '</span>';
		$title_overlay = '<p class="sub-page-link--title-overlay font-bold text-3xl font-sans text-black uppercase m-0 absolute top-[14px] transition-all duration-300 ease-in-out -translate-x-full opacity-0">' . esc_html__( 'eintreten', 'chasseral' ) . '</p>';
		$overlay_open  = '<div class="sub-page-link--overlay">';
		$overlay_close = '</div>';

		if ( 'hotel_restaurant' === $slug ) :
			$link_class = 'sub-page-link--hotel';
		elseif ( 'top_of_jura' === $slug ) :
			$link_class = 'sub-page-link--top-of-jura';
		elseif ( 'szl' === $slug ) :
			$link_class = 'sub-page-link--szl';
		endif;

		if ( ! empty( $logo ) ) :
			$link_logo = '<img src="' . esc_url( $logo['url'] )  . '" alt="' . $logo['alt'] . '" class="sub-page-link--logo max-w-[175px] mb-10">';
		endif;
		if ( ! empty( $root ) ) :
			$root_id    = $root->ID;
			$link_open  = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="sub-page-link ' . $link_class . '">';
			$link_close = '</a>';
			$link_title = '<h2 class="font-bold text-3xl font-sans text-black uppercase mb-10">' . $root->post_title . '</h2>';
			$link_desc  = get_the_excerpt( $root_id );
			if ( has_post_thumbnail( $root_id ) ) :
				$link_img_src = get_the_post_thumbnail_url( $root_id, 'sub-page-thumbnail' );
				$link_img     = '<img src="' . $link_img_src . '" class="sub-page-link--image object-cover absolute top-0 left-0 w-full h-auto">';
			endif;
		endif;

		$link_render  = $link_open;
		$link_render .= $title_before;
		$link_render .= $link_title;
		$link_render .= $title_overlay;
		$link_render .= $link_arrow;
		$link_render .= $title_after;
		$link_render .= $link_img;
		$link_render .= $overlay_open;
		$link_render .= $link_logo;
		$link_render .= $link_title;
		$link_render .= $link_desc;
		$link_render .= $overlay_close;
		$link_render .= $link_close;

		echo $link_render;
	else :
		echo 'You need to pass a slug for the link! The slug is the name of the ACF field.';
	endif;
}

add_action( 'sub_pages_link', 'chasseral_theme_sub_pages', 10, 1 );

/**
 * This function gets the color from the category.
 */
function chasseral_theme_get_cat_color_class( $type ) {
	$event_cat          = get_the_category();
	$event_cat_id       = $event_cat[0]->term_id;
	$event_cat_hexcolor = get_field( 'category_color', 'category_' . $event_cat_id );

	if ( $event_cat_hexcolor ) :
		if ( 'hex' === $type ) :
			$cat_hex = $event_cat_hexcolor;
			echo esc_attr( $cat_hex );
		elseif ( 'class' === $type ) :
			$cat_class = '';
			if ( '#D12329' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'hotel';
			elseif ( '#00944E' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'szl';
			elseif ( '#0071BA' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'jura';
			endif;
			echo esc_html( $cat_class );
		endif;
	endif;
}

add_action( 'cat_color', 'chasseral_theme_get_cat_color_class', 10, 1 );

/**
 * This function creates the pagination links.
 */
function chasseral_theme_pagination( $lquery ) {
	$big = 999999999;
	$my_pagination = paginate_links(
		array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'    => '?paged=%#%',
			'total'     => $lquery->max_num_pages,
			'current'   => max( 1, get_query_var( 'paged' ) ),
			'prev_text' => __( 'Previous' ),
			'next_text' => __( 'Next' ),
		)
	);
	echo '<div class="pagination">' . $my_pagination . '</div>';
}

add_action( 'pagination', 'chasseral_theme_pagination', 10, 1 );