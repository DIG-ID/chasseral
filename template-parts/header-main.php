<header id="header-main" class="header-main w-full fixed top-0 box-border bg-bg-color border-b border-black border-solid" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="navigation-main-content w-full h-[75px] flex items-stretch justify-between">
			<div class="w-1/2 md:border-r border-solid border-black flex">
				<?php
				has_custom_logo() ? the_custom_logo() : '';
				get_template_part( 'template-parts/navigation', 'widget' );
				?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
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
				<div class="col-auto flex-col justify-center border-r border-solid border-black px-20 hidden lg:flex">
					<div class="see-webcam w-full flex items-center gap-5 mb-8">
						<div class="grow">
							<h3 class="text-xl font-bold text-black font-sans mb-3 uppercase"><?php the_field( 'widget_text_title', 'services-status' ); ?></h3>
							<p class="text-body !leading-5"><?php the_field( 'widget_text_description', 'services-status' ); ?></p>
						</div>
						<?php
						$webcam_link = get_field( 'widget_text_link', 'services-status' );
						if ( $webcam_link ) :
							$link_url    = $webcam_link['url'];
							$link_title  = $webcam_link['title'];
							$link_target = $webcam_link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn-general whitespace-nowrap flex items-center !px-6" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<?php echo esc_html( $link_title ); ?>
								<svg class="ml-1 " width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
								</svg>
							</a>
							<?php
						endif;
						?>
					</div>
					<?php do_action( 'service_status_widget' ); ?>
					<?php do_action( 'notification' ); ?>
				</div>
				<div class="mega-links col-auto flex flex-col justify-center px-0 lg:px-20 xl:px-40">
					<p class="mega-menu-title uppercase font-bold mb-5 hidden lg:block"><?php esc_html_e( 'Willkommen auf dem Chasseral', 'chasseral' ); ?></p>
					<p class="mega-menu-description mb-10 hidden lg:block"><?php esc_html_e( 'Erleben Sie die Vielfalt des Jura.', 'chasseral' ); ?></p>
					<?php
					do_action( 'mega_menu_link', 'szl', 'mega-menu' );
					do_action( 'mega_menu_link', 'hotel_restaurant', 'mega-menu' );
					do_action( 'mega_menu_link', 'top_of_jura', 'mega-menu' );
					?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => 'main-menu-mega-menu flex flex-col lg:hidden',
							'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
							'fallback_cb'    => '__return_false',
						),
					);
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
