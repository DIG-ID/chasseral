<footer class="footer-main pt-16 border-t border-solid border-black">
	<div class="footer-content container mx-auto px-8 grid grid-cols-1 gap-5 lg:grid-cols-12 lg:grid-rows-2">
		<div class="col-span-1 lg:col-span-3 lg:row-span-2">
			<?php the_custom_logo(); ?>
			<div class="footer-contacts mt-10 flex flex-col justify-between">
				<p class=""><?php the_field( 'footer_address', 'options' ); ?></p>
				<a href="mailto:<?php echo esc_attr( get_field( 'footer_email', 'options' ) ); ?>" class=""><?php the_field( 'footer_email', 'options' ); ?></a>
				<?php
				$phone = get_field( 'footer_phone', 'options' );
				if ( $phone ) :
					?><a href="tel:<?php echo esc_attr( str_replace(' ', '', $phone) ); ?>" class=""><?php the_field( 'footer_phone', 'options' ); ?></a><?php
				endif;
				?>
				<a href="tel:<?php echo trim( get_field( 'footer_fax', 'options' ) ); ?>" class=""><?php the_field( 'footer_fax', 'options' ); ?></a>
			</div>

		</div>
		<div class="col-span-1 lg:col-span-3">
			<?php
			do_action( 'mega_menu_link', 'szl', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'szl',
					'container'      => false,
					'menu_class'     => 'mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3 ">
			<?php
			do_action( 'mega_menu_link', 'hotel_restaurant', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'hotel',
					'container'      => false,
					'menu_class'     => 'mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<?php
			do_action( 'mega_menu_link', 'top_of_jura', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'jura',
					'container'      => false,
					'menu_class'     => 'mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<h3 class="text-sm font-bold uppercase">newsletter</h3>
		</div>
		<div class="col-span-1 lg:col-span-3">
		<h3 class="text-sm font-bold uppercase">follow us</h3>
		</div>
	</div>
	<div class="copyright container mx-auto px-8">
		<p class="copyright-text text-xs font-normal">
			<?php
			$y = date( 'Y' );
			printf(
				esc_html__( 'Copyright &copy; %d Chasseral', 'chasseral' ),
				esc_html( $y ),
			);
			?>
		</p>
	</div>
</footer>