<header id="header-main" class="header-main header-main--hotel sticky box-border bg-bg-color border-b border-black border-solid" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content w-full h-[75px] flex items-center lg:items-stretch justify-between">
			<div class="w-1/2 flex lg:border-r lg:border-solid lg:border-black">
				<?php
				do_action( 'mega_menu_link', 'hotel_restaurant', 'mega-menu-simple' );
				get_template_part( 'template-parts/navigation', 'widget' );
				?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'hotel',
					'container'      => false,
					'menu_class'     => 'hidden lg:flex',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			<div class="navigation-buttons flex">
				<?php do_action( 'wpml_add_language_selector' ); ?>
				<button class="mega-menu-toggle relative box-border m-0 transition-all duration-300 ease-in-out cursor-pointer flex flex-col justify-center items-center">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
		</div>

		<div class="mega-menu-navigation absolute top-75 left-0 h-0 overflow-hidden w-full flex justify-center items-center bg-bg-color border-t border-solid border-black">
			<div class="mega-menu-content w-full h-full grid grid-cols-1 lg:grid-cols-2">
				<div class="col-auto flex flex-col justify-center items-center bg-main-red text-white">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'hotel-mega',
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
					<?php
					do_action( 'mega_menu_link', 'top_of_jura', 'mega-menu-bg' );
					do_action( 'mega_menu_link', 'szl', 'mega-menu-bg' );
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
