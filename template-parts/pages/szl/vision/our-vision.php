<section class="section-our-vision grid lg:grid-cols-2 xl:h-[1000px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black order-2 lg:order-1">
		<?php
		$vision_image = get_field( 'our_vision_image' );
		if ( ! empty( $vision_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $vision_image, 'vision-block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $vision_image ) ); ?>" /><?php
		endif;
		?>
	</div>
	<div class="cols-span-1 p-8 lg:p-16 xl:pt-36 xl:pb-16 xl:pl-36 order-1 lg:order-2">
		<h1 class="text-black title-normal font-bold lg:!mb-16"><?php the_field( 'our_vision_title' ); ?></h1>
		<div class="section-our-vision-description lg:max-w-lg"><?php the_field( 'our_vision_description' ); ?></div>
	</div>
</section>