<section class="section-exhibition grid grid-cols-1 lg:grid-cols-2 border-t border-solid border-black h-auto lg:h-[700px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black">
		<?php
		$image_exhibition = get_field( 'current_exhibition_image' );
		if ( ! empty( $image_exhibition ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $image_exhibition, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $image_exhibition ) ); ?>" /><?php
		endif;
		?>
	</div> 
	<div class="cols-span-1 p-8 lg:p-16 xl:pt-36 xl:pb-16 xl:pl-36">
		<h2 class="text-black text-3xl font-bold mb-16"><?php the_field( 'current_exhibition_title' ); ?></h2>
		<p class="text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'current_exhibition_description' ); ?></p>
		<?php
		$link = get_field( 'current_exhibition_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>