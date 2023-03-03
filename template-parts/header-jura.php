<header id="header-main" class="header-main header-main--jura sticky box-border bg-bg-color border-b border-black border-solid" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content w-full h-[75px] flex items-stretch justify-items-stretch">
			<div class="w-1/2 border-r border-solid border-black flex">
				<?php
				$link_logo = get_field( 'theme_logos_top_of_jura', 'options' );
				$link_root = get_field( 'root_pages_top_of_jura', 'options' );
				if ( $link_logo && $link_root ) :
					$lc = '<a href="' . esc_url( get_permalink( $link_root->ID ) ) . '" class="custom-logo-link">';
					$lc .= '<img src="' . esc_url( $link_logo['url'] )  . '" alt="' . $link_logo['alt'] . '">';
					$lc .= '</a>';
					echo $lc;
				endif;
				get_template_part( 'template-parts/navigation', 'widget' );
				?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'jura',
					'container'      => false,
					'menu_class'     => '',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			<?php do_action( 'wpml_add_language_selector' ); ?>
			<button class="mega-menu-toggle relative box-border m-0 transition-all duration-300 ease-in-out cursor-pointer flex flex-col justify-center items-center">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
		</div>

		<div class="mega-menu-navigation absolute top-75 left-0 h-0 overflow-hidden w-full flex justify-center items-center bg-bg-color border-t border-solid border-black">
			<div class="mega-menu-content w-full h-full grid grid-cols-2">
				<div class="col-auto flex flex-col justify-center items-center">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'jura-mega',
							'container'      => false,
							'menu_class'     => '',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
						),
					);
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => '',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
						),
					);
					?>
				</div>
				<div class="col-auto flex flex-col justify-center border-l border-solid border-black px-40">
					<p class="mega-menu-title uppercase font-bold mb-5"><?php esc_html_e( 'Willkommen auf dem Chasseral', 'chasseral' ); ?></p>
					<p class="mega-menu-description mb-10"><?php esc_html_e( 'Erleben Sie die Vielfallt des Jura und entdecken Sie das Tor zu den Alpen.', 'chasseral' ); ?></p>
					<?php
					do_action( 'mega_menu_link', 'hotel_restaurant', false );
					do_action( 'mega_menu_link', 'szl', false );
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
