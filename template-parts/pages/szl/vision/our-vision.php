<section class="section-our-vision grid grid-cols-2 border-t border-solid border-black h-[1000px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black">
		<?php
		$vision_image = get_field( 'our_vision_image' );
		if ( ! empty( $vision_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $vision_image, 'vision-block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $vision_image ) ); ?>" /><?php
		endif;
		?>
	</div>
	<div class="cols-span-1 pt-36 pb-0 pl-36">
		<h1 class="text-black text-3xl font-bold mb-16"><?php the_field( 'our_vision_title' ); ?></h1>
		<div class="section-our-vision-description max-w-lg"><?php the_field( 'our_vision_description' ); ?></div>
	</div>
</section>