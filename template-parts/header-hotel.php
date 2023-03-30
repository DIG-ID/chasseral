<header id="header-main" class="header-main header-main--hotel w-full fixed top-0 box-border bg-bg-color border-b border-black border-solid" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content">
			<div class="w-1/2 md:border-r border-solid border-black flex">
				<?php
				do_action( 'mega_menu_link', 'hotel_restaurant', 'mega-menu-simple' );
				get_template_part( 'template-parts/modules/widget', 'navigation' );
				?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'hotel',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			<div class="navigation-buttons">
				<?php do_action( 'wpml_add_language_selector' ); ?>
				<button class="mega-menu-toggle">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
		</div>

		<div class="mega-menu-navigation">
			<div class="mega-menu-content">
				<div class="mega-menu--wrapper">
					<div class="site-root-title">
						<p class="text-3xl font-bold uppercase bold whitespace-nowrap"><?php esc_html_e( 'Hotel & Restaurant', 'chasseral' ); ?></p>
					</div>
					<div class="mega-menu--menus">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'hotel',
								'container'      => false,
								'menu_class'     => 'mega-menu-top',
								'menu_id'        => 'hotel-mega-menu',
								'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb'    => '__return_false',
							),
						);
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'container'      => false,
								'menu_class'     => 'mega-menu-bottom',
								'menu_id'        => 'main-mega-menu',
								'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb'    => '__return_false',
							),
						);
						?>
					</div>
				</div>
				<div class="mega-links-xl">
					<?php
					do_action( 'mega_menu_link', 'top_of_jura', 'mega-menu-bg' );
					do_action( 'mega_menu_link', 'szl', 'mega-menu-bg' );
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
<?php get_template_part( 'template-parts/modules/widget', 'mobile' ); ?>
<?php get_template_part( 'template-parts/modules/services-status', 'popup' ); ?>