<section class="section-direct-booking px-0 lg:px-8 py-14 bg-main-green xl:px-0">
	<div class="lg:container mx-auto grid grid-cols-1 gap-8 lg:grid-cols-12 lg:items-center px-8">
		<h3 class="text-3xl font-bold text-main-beige col-span-1 mb-10 lg:self-start lg:col-span-3"><?php the_field( 'direct_booking_section_title', 'option' ); ?></h3>
		<p class="col-span-1 lg:col-span-5 text-main-beige text-lg leading-8 tracking-wider mb-10 lg:mb-0 lg:border-l lg:border-main-beige lg:pl-4"><?php the_field( 'direct_booking_section_description', 'option' ); ?></p>
		<div class="col-span-1 lg:col-start-10 lg:col-span-3">
			<?php
			$btn = get_field( 'direct_booking_section_button', 'option' );
			if ( $btn ) :
				$btn_url    = $btn['url'];
				$btn_title  = $btn['title'];
				$btn_target = $btn['target'] ? $btn['target'] : '_self';
				?>
					<a class="bg-main-beige text-main-green inline-block lg:block text-sm text-center font-normal tracking-widest uppercase py-4 px-16 lg:px-0 lg:w-full transition-all duration-500 ease-in-out hover:bg-darker-green hover:text-main-beige border border-main-beige" href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $btn_target ); ?>"><?php echo esc_html( $btn_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
