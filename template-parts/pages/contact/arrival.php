<section class="section-arrival grid grid-cols-1 lg:grid-cols-12 border-t border-solid border-black overflow-hidden">
	<div class="lg:col-start-1 xl:col-start-2 lg:col-span-6 xl:col-span-3 col-span-1 flex flex-col justify-center p-8 xl:p-0">
		<h2 class="section-title text-2xl lg:text-3xl font-bold mb-8 lg:mb-16"><?php the_field( 'arrival_title' ); ?></h2>
		<div class="section-description"><?php echo wp_kses_post( wpautop( get_field( 'arrival_description' ) ) );  ?></div>
	</div>
	<div class="lg:col-start-7 lg:col-span-6 col-span-1 border-l border-solid border-black">
		<?php
		$image = get_field( 'arrival_image' );
		if ( ! empty( $image ) ) :
			echo '<img class="w-full h-auto max-h-[1300px] object-cover" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" />';
		endif;
		?>
	</div>
</section>