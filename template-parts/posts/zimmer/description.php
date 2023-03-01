<section class="section-intro pt-24 pb-16 lg:px-8 xl:px-0">
	<div class="lg:container mx-auto grid grid-cols-1 lg:gap-8 px-8 lg:grid-cols-12">
		<div class="title col-span-1 lg:col-span-4">
			<h1 class="text-2xl lg:text-3xl font-bold lg:font-semibold mb-8 lg:mb-5 w-1/2 lg:w-full"><?php echo esc_html( wp_strip_all_tags( get_the_title() ) ); ?></h1>
			<p class="text-2xl text-main-green font-normal mb-8 lg:mb-10">
				<?php the_field( 'subtitle' ); ?>
			</p>
		</div>
		<div class="description col-span-1 lg:col-span-5">
			<p class="text-main-green text-sm leading-8 tracking-wider lg:mr-8 mb-8">
				<?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?>
			</p>
		</div>
		<div class="description col-span-1 lg:col-span-3">
		<?php
		$btn = get_field( 'booking_button' );
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
</section>
