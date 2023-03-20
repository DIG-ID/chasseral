<section class="section-environment grid grid-cols-2 border-t border-solid border-black h-[700px]">
	<div class="cols-span-1 border-r border-solid border-black">
		<?php
		$environment_image = get_field( 'environment_image' );
		if ( ! empty( $environment_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_html( wp_get_attachment_image_url( $environment_image, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $environment_image ) ); ?>" /><?php
		endif;
		?>
	</div> 
	<div class="cols-span-1 pt-36 pb-0 pl-36">
		<h2 class="text-black text-3xl font-bold mb-16"><?php the_field( 'environment_title' ); ?></h2>
		<p class="text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'environment_description' ); ?></p>
		<?php
		$link = get_field( 'environment_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>