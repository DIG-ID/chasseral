<section class="section-vision grid grid-cols-1 lg:grid-cols-2 border-t border-solid border-black h-auto lg:h-[700px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black p-8 lg:p-16 xl:pt-36 xl:pb-16 xl:pl-36 order-2 lg:order-1">
		<h2 class="text-black text-3xl font-bold mb-16 "><?php the_field( 'vision_title' ); ?></h2>
		<p class="text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'vision_description' ); ?></p>
		<?php
		$link = get_field( 'vision_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
	<div class="cols-span-1 order-1 lg:order-2">
		<?php
		$vision_image = get_field( 'vision_image' );
		if ( ! empty( $vision_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $vision_image, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $vision_image ) ); ?>" /><?php
		endif;
		?>
	</div> 
</section>