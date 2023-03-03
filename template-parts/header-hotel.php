<header id="header-main" class="header-main header-main--hotel-restaurant w-full h-[75px] border-b border-black border-solid flex flex-col items-center justify-center" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main w-full" role="navigation" aria-label="<?php esc_attr_e( 'Hotel Restaurant navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content w-full flex items-center">
			<?php

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
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
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
<?php
