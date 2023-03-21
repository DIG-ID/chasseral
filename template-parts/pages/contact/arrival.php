<section class="section-arrival grid grid-cols-12 border-t border-solid border-black overflow-hidden">
	<div class="col-start-2 col-span-3 flex flex-col justify-center">
		<h2 class="section-title text-3xl font-bold mb-16"><?php the_field( 'arrival_title' ); ?></h2>
		<div class="section-description"><?php echo wp_kses_post( wpautop( get_field( 'arrival_description' ) ) );  ?></div>
	</div>
	<div class="col-start-7 col-span-6 border-l border-solid border-black">
		<?php
		$image = get_field( 'arrival_image' );
		if ( ! empty( $image ) ) :
			echo '<img class="w-full h-auto max-h-[1300px] object-cover" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" />';
		endif;
		?>
	</div>
</section>