<section class="section-about-us grid grid-cols-2 border-t border-solid border-black h-[1000px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black pt-36 pb-0 pl-36">
		<h2 class="text-black text-3xl font-bold mb-16"><?php the_field( 'about_us_title' ); ?></h2>
		<div class="section-about-us-description max-w-lg"><?php the_field( 'about_us_description' ); ?></div>
	</div> 
	<div class="cols-span-1">
		<?php
		$about_image = get_field( 'about_us_image' );
		if ( ! empty( $about_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $about_image, 'vision-block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $about_image ) ); ?>" /><?php
		endif;
		?>
	</div>
</section>