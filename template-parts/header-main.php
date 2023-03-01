<header id="header-main" class="header-main w-full h-[75px]" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content flex items-center">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				echo '<img src="" alt="default-logo">';
			endif;
			get_template_part( 'template-parts/navigation', 'widget' );
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => '',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			do_action( 'wpml_add_language_selector' );
			?>
			<button class="mega-menu-toggle">
				<span></span>
				<span></span>
				<span></span>
				toogle
			</button>
		</div>

		<div class="mega-menu-navigation hidden absolute top-0 left-0 w-full h-screen flex flex-col justify-center items-center text-main-beige z-40">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-mega',
					'container'      => false,
					'menu_class'     => '',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
	</nav>
</header>
